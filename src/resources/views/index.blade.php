<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>{{ env('APP_NAME') }} | Artisan-Ui</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=0.41, maximum-scale=1" />
  @include('artisan-ui::assets.style')
</head>
<body>
  <div class="onex-container">
    @include('artisan-ui::page-title')

    <!-- Admin Access Area -->
    @if(!empty($config_data['authentication']['is_enabled']) && $config_data['authentication']['is_enabled'] && Session::get('artisanUiAdminAccessEnabled') == 'NO')
      @include('artisan-ui::system-access')
    @endif

    <!-- INFORMTION AREA -->
    @if(!$config_data['authentication']['is_enabled'] || (Session::has('artisanUiAdminAccessEnabled') && Session::get('artisanUiAdminAccessEnabled') == 'YES'))
      @include('artisan-ui::artisans')
    @endif
  </div>
  @include('artisan-ui::assets.script')
</body>
</html>
