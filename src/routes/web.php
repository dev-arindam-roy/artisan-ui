<?php

use Illuminate\Support\Facades\Route;

Route::pattern('command', '^[a-z0-9\-\:]*$');

$artisanUiRouteEnabled = true;
$artisanUiRoutePrefix = 'onex';
$artisanUiRouteName = 'artisan-ui';
$artisanUiMiddleware = ['web'];

$publishedConfigFilePath = config_path('artisan-ui.php');
if (file_exists($publishedConfigFilePath)) {
    $artisanUiRouteEnabled = !empty(config('artisan-ui.is_route_enabled')) ? config('artisan-ui.is_route_enabled') : true;
    $artisanUiRoutePrefix = !empty(config('artisan-ui.route_prefix')) ? config('artisan-ui.route_prefix') : '';
    $artisanUiRouteName = !empty(config('artisan-ui.route_name')) ? config('artisan-ui.route_name') : $artisanUiRouteName; 
    $artisanUiMiddleware = !empty(config('artisan-ui.route_middleware')) ? config('artisan-ui.route_middleware') : $artisanUiMiddleware; 
}

if ($artisanUiRouteEnabled) {
    Route::group(['namespace' => 'CreativeSyntax\ArtisanUi\Http\Controllers', 'prefix' => $artisanUiRoutePrefix, 'middleware' => $artisanUiMiddleware], function() use($artisanUiRouteName) {
        Route::get($artisanUiRouteName, 'ArtisanUiController@index')->name('artisan-ui.index');
        Route::get($artisanUiRouteName . '/run-artisan-command', 'ArtisanUiController@runArtisanCommand')->name('artisan-ui.runCommand');
        Route::post('artisan-ui-adminaccess', 'ArtisanUiController@adminAccess')->name('artisan-ui.adminAccess');
        Route::get('artisan-ui-adminaccess/logout', 'ArtisanUiController@logout')->name('artisan-ui.adminLogout');
    });
}