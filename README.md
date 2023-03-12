# LARAVEL WEB ARTISAN UI/GUI - LIVE SERVER

### A simple laravel package for artisan commands with user interface.

# Installation

### STEP 1: Run the composer command:

```shell
composer require creative-syntax/artisan-ui
```

### STEP 2: Laravel without auto-discovery:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
CreativeSyntax\ArtisanUi\CreativeSyntaxArtisanUi::class,
```

### STEP 3: Publish the package config:

```php
php artisan vendor:publish --tag="artisan-ui:config
```
### - OR - 

```php
php artisan vendor:publish --provider="CreativeSyntax\ArtisanUi\CreativeSyntaxArtisanUi" --force
```

## How to use?: It's Very Easy

> **DIRECT USE BY ROUTE**
---
<dl>
  <dt>>> <code>Just install and run the below route </span></code></dt>
</dl>

```php
Ex: http://your-website/onex/artisan-ui

Ex: http://localhost:8000/onex/artisan-ui
```

![cache_ui](https://user-images.githubusercontent.com/24665327/224533931-ceb13672-0b20-4b0f-a2ba-9ab068d5bc46.png)

![controller_ui](https://user-images.githubusercontent.com/24665327/224533944-2bbc279f-2e45-41c3-95e1-e6f385397970.png)

![alter_ui](https://user-images.githubusercontent.com/24665327/224533962-ee512c04-bcaf-4699-aaee-8bcf5a74b83e.png)

![migration_ui](https://user-images.githubusercontent.com/24665327/224533979-b10e3cc2-e7a8-4205-aaad-3cfa419deb67.png)

## Functionalities / Features
<dl>
  <dt>>> <code>Run all artisan commands in LIVE server through web user interface (GUI)</span></code></dt>
  <dt>>> <code>Run all artisan commands in Shared Hosting & Dedicated Hosting</span></code></dt>
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
'route_name' => 'artisan-ui',
```

```php
/** If you want to change the page heading */
'page_heading' => 'Artisan UI',
```

```php
/** If you want to enable the securiry for access the system information
 *  Then make it ('is_enabled') true and also you can set login-id and password 
 */
'authentication' => [
    'is_enabled' => env('ARTISAN_UI_AUTH_ENABLED', false),
    'login_id' => env('ARTISAN_UI_LOGIN_ID', 'onexadmin'),
    'password' => env('ARTISAN_UI_LOGIN_PASSWORD', 'onexpassword')
]
```
![access_ui](https://user-images.githubusercontent.com/24665327/224533996-1faf7804-d144-41b0-bb11-8ba2186945c4.png)


## license:
MIT
