<?php

namespace CreativeSyntax\ArtisanUi\Http\Controllers;

use App\Http\Controllers\Controller;
use CreativeSyntax\ArtisanUi\Traits\Makeable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Output\BufferedOutput;
use Illuminate\Support\Str;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\View;

class ArtisanUiController extends Controller
{
    use Makeable;

    protected $configData;

    public function __construct()
    {
        $this->configData = config('artisan-ui');
    }

    public function index(Request $request)
    {
        $dataBag = [];

        if (!$this->configData['authentication']['is_enabled']) {
            Session::put('artisanUiAdminAccessEnabled', 'NO');
        }

        if (!Session::has('artisanUiAdminAccessEnabled')) {
            Session::put('artisanUiAdminAccessEnabled', 'NO');
        }
        
        $dataBag['config_data'] = $this->configData;
        $dataBag['init_data'] = self::initData();
        $dataBag['cmd_mackable'] = $this->dynamicMackable();
        return view('artisan-ui::index', $dataBag);
    }

    public function adminAccess(Request $request)
    {
        $rules = [
            'loginid' => 'required',
            'password' => 'required'
        ];

        $ruleMsgs = [
            'loginid.required' => 'Please enter login-id',
            'password.required' => 'Please enter password'
        ];

        $validation = Validator::make($request->all(), $rules, $ruleMsgs);

        if ($validation->fails()) {
            return redirect()->back()
                ->withErrors($validation, 'accessValiError')
                ->withInput($request->all())
                ->with('onexValiErrMsg', 'Please enter login-id & password');
        }

        if ($request->input('loginid') == $this->configData['authentication']['login_id'] && $request->input('password') == $this->configData['authentication']['password']) {
            Session::put('artisanUiAdminAccessEnabled', 'YES');
            return redirect()->back()->with('onexSuccessMsg', 'Access Granted');
        } else {
            return redirect()->back()->with('onexAccessErrsMsg', 'Access Denied! Wrong login-id & password');
        }
        
    }

    public function logout(Request $request)
    {
        Session::put('artisanUiAdminAccessEnabled', 'NO');
        Session::forget('artisanUiAdminAccessEnabled');
        return redirect()->route('artisan-ui.index')->with('onexSuccessMsg', 'Logout!');
    }

    public static function initData()
    {
        $arr = [];
        $arr['laravel'] = app()->version();
        $arr['php'] = PHP_VERSION;
        $arr['mysql'] = self::getMySqlVersion();
        return $arr;
    }

    public static function getMySqlVersion()
    {
        try {
            $pdo = DB::getPdo();
            return $pdo->query('select version()')->fetchColumn();
        } catch (\Exception $e) {
            return '';
            //return $e->getMessage();
        }
    }

    public function runArtisanCommand(Request $request)
    {
        $reqData = $request->all();
        $params = [];
        $params['args'] = [];
        if (!empty($reqData['exec_command'])) {
            $command = strtolower($reqData['exec_command']);
            $params['command'] = str_replace('_', ':', $command);
        }
        if (!empty($reqData['cmd'])) {
            $command = strtolower($reqData['cmd']);
            $params['command'] = str_replace('_', ':', $command);
        }
        if (!empty($reqData['argums'])) {
            $argumsArr = explode('_', $reqData['argums']);
            if (!empty($argumsArr) && count($argumsArr)) {
                foreach ($argumsArr as $k => $v) {
                    if (!empty($v)) {
                        $params['args']['--' . $v] = true;
                    }
                }
            }
        }
        if (!empty($reqData['param'])) {
            $params['args']['--' . $reqData['param']] = !empty($reqData['param_value']) ? $reqData['param_value'] : '';
        }
        if ($params['command'] == 'make:migration' && !empty($reqData['cmd_name'])) {
            $table = strtolower($reqData['cmd_name']);
            $table = str_replace(' ', '_', $table);
            $params['args']['--create'] = $table;
        }
        if ($params['command'] == 'alter:make:migration' && !empty($reqData['tab_name'])) {
            $table = strtolower($reqData['tab_name']);
            $table = str_replace(' ', '_', $table);
            $params['args']['--table'] = $table;
            $params['command'] = 'make:migration';
        }
        $params['succ_msg'] = !empty($reqData['succ_msg']) ? ucfirst($reqData['succ_msg']) : '';
        $params['err_msg'] = !empty($reqData['err_msg']) ? ucfirst($reqData['err_msg']) : '';
        $params['tab_key'] = !empty($reqData['tab_key']) ? $reqData['tab_key'] : '';
        $params['rerun'] = !empty($reqData['rerun']) ? $reqData['rerun'] : 'YES';
        if (!empty($reqData['param_value'])) {
            $params['succ_msg'] = str_replace('[paramValue]', $reqData['param_value'], $params['succ_msg']);
        }
        if (!empty($reqData['cmd_name']) && !empty($params['command'])) {
            $reqData['cmd_name'] = str_replace(' ', '_', $reqData['cmd_name']);
            if ($params['command'] == 'make:migration') {
                $params['args']['name'] = 'create_' . strtolower($reqData['cmd_name']) . '_table';
            } else {
                $params['args']['name'] = $reqData['cmd_name'];
            }
            $params['succ_msg'] = str_replace('[CMD_NAME]', $reqData['cmd_name'], $params['succ_msg']);
        }
        if (!empty($params['command'])) {
            $result = self::executeCommand($params);
            return $result;
        }
        return '';
    }

    public static function executeCommand($params)
    {
        try {
            $dataBag = [];
            $dataBag['is_success'] = 'OK';
            $dataBag['btn_text'] = 'Done!';
            $dataBag['response_msg'] = $params['succ_msg'];
            $dataBag['rerun'] = $params['rerun'];
            if (!empty($params['tab_key'])) {
                if (self::isMigrationExist($params['tab_key']) == 'YES') {
                    $dataBag['response_msg'] = $params['err_msg'];
                    $dataBag['rerun'] = 'NO';
                    $dataBag['btn_text'] = 'Already Exist!';
                    return response()->json($dataBag);
                } 
            }
            Artisan::call($params['command'], $params['args']);
            return response()->json($dataBag);
        } catch (\Exception $exception) {
            $dataBag['is_success'] = 'ERROR';
            $dataBag['btn_text'] = 'Error!';
            $dataBag['response_msg'] = $exception->getMessage();
            return response()->json($dataBag);
        }
    }

    public static function isMigrationExist($keyWord)
    {
        $fileNamesArr = glob(database_path('migrations') . '/*.php');
        if (!empty($fileNamesArr) && count($fileNamesArr)) {
            foreach ($fileNamesArr as $v) {
                if(strpos(basename($v), $keyWord) !== false) {
                    return 'YES';
                } 
            }
        }
        return 'NO';
    }
}
