<?php

namespace Delonix\Sso;

use Illuminate\Support\ServiceProvider;
use Delonix\Sso\Commands\GenerateSecretKey;

class SsoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            GenerateSecretKey::class,
        ]);

        // Registration of the configuration filess
        $this->publishes([
            __DIR__ . '/config/sso-delonix.php' => config_path('sso-delonix.php'),
        ], 'sso-delonix');

        // Registration of routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
    }

    public function register()
    {
        // Download configuration file
        $this->mergeConfigFrom(
            __DIR__ . '/config/sso-delonix.php',
            'sso-delonix'
        );
    }
}
