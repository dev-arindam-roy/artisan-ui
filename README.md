# LARAVEL LOG VIEWER

### A package for viewing or rendering the Laravel logs. It also extract logs in different level.

## Installation

> **No dependency on PHP version and LARAVEL version**

### STEP 1: Run the composer command:

```shell
composer require creative-syntax/laravel-logviewer
```

### STEP 2: Laravel without auto-discovery:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
CreativeSyntax\LogViewer\CreativeSyntaxLogViewer::class,
```

### STEP 3: Publish the package config:

```php
php artisan vendor:publish --provider="CreativeSyntax\LogViewer\CreativeSyntaxLogViewer" --force
```

## How to use?: It's Very Easy

> **DIRECT USE BY ROUTE**
---
<dl>
  <dt>>> <code>Just install and run the below route </span></code></dt>
</dl>

```php
Ex: http://your-website/onex/log-viewer

Ex: http://localhost:8000/onex/log-viewer
```

![log_viewer](https://user-images.githubusercontent.com/24665327/222919334-3bb531a5-6a42-49ce-93c9-7d1b2478179d.png)


![extract_log](https://user-images.githubusercontent.com/24665327/222919351-786ca012-f478-4e34-aced-5e6a7683981c.png)


## Functionalities / Features
<dl>
  <dt>>> <code>Download all log files in a zip file </span></code></dt>
  <dt>>> <code>Download selected log files in a zip file </span></code></dt>
  <dt>>> <code>Delete all log files just a click </span></code></dt>
  <dt>>> <code>Delete selected log files </span></code></dt>
  <dt>>> <code>Also you can Download, Clear, Delete each log file</span></code></dt>
  <dt>>> <code>You can restrict the access of log files by the config settings</span></code></dt>
  <dt>>> <code>You can customize the configuration as you want</span></code></dt>
</dl>

#### You can modify the configuration settings in - "config/log-viewer.php":

```php
/** If you want to disable the route or this feature, then make it false */
'is_route_enabled' => true,
```

```php
/** If you want to change the route prefix */
'route_prefix' => 'onex',
```

```php
/** If you want to change the route name or path */
'route_name' => 'log-viewer',
```

```php
/** If you want to change the page heading */
'page_heading' => 'Logs Viewer',
```

```php
/** If you want to enable the securiry for access the system information
 *  Then make it ('is_enabled') true and also you can set login-id and password 
 */
'authentication' => [
    'is_enabled' => env('LOGVIEWER_AUTH_ENABLED', false),
    'login_id' => env('LOGVIEWER_LOGIN_ID', 'onexadmin'),
    'password' => env('LOGVIEWER_LOGIN_PASSWORD', 'onexpassword')
]
```

![admin_access](https://user-images.githubusercontent.com/24665327/222919478-474bcc99-bc5b-4414-8d17-6dfa16ef09b1.png)


## license:
MIT
