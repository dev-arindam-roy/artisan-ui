<?php

return [

    /**
     * If you want to disable the route for the artisan ui view page
     * 
     * available options: true, false
     * 
     * default: true
     */

    'is_route_enabled' => true, 
    
    
    /**
     * If you want to change the route prefix
     * 
     */
    'route_prefix' => 'onex',
    

    /**
     * If you want to change the route name
     * 
     * default: artisan-ui
     */
    'route_name' => 'artisan-ui',

    /**
     * If you want to add any middleware (s) to restrict the access
     * 
     * default: web
     */
    'route_middleware' => ['web'],

    /**
     * If you want to change the page heading
     *
     */
    'page_heading' => 'Artisan UI',


    /**
     * If you want to use a authentication process to access the artisan command interface (UI)
     */
    'authentication' => [
        'is_enabled' => env('ARTISAN_UI_AUTH_ENABLED', false),
        'login_id' => env('ARTISAN_UI_LOGIN_ID', 'onexadmin'),
        'password' => env('ARTISAN_UI_LOGIN_PASSWORD', 'onexpassword')
    ]
];