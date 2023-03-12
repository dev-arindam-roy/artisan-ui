<?php

namespace CreativeSyntax\ArtisanUi;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class CreativeSyntaxArtisanUi extends ServiceProvider
{

    protected $root;

    public function __construct($app) {
        parent::__construct($app);
        $this->root = realpath(__DIR__ . '/../');
    }

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::share('package_root', $this->root);

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'artisan-ui');

        $this->mergeConfigFrom(
            __DIR__ . '/config/artisan-ui.php', 'artisan-ui'
        );

        $this->publishes([
            __DIR__ . '/config/artisan-ui.php' => config_path('artisan-ui.php')
        ], 'artisan-ui:config');

        //php artisan vendor:publish --provider="CreativeSyntax\ArtisanUi\CreativeSyntaxArtisanUi" --force
        //php artisan vendor:publish --tag="artisan-ui:config"
    }
}