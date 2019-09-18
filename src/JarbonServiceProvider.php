<?php

namespace Mokhosh\Jarbon;

use Illuminate\Support\ServiceProvider;

class JarbonServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->mergeConfigFrom(__DIR__.'/../config/jarbon.php', 'jarbon');
        $this->publishes([__DIR__.'/../config/jarbon.php' => config_path('jarbon.php')]);
    }

    public function register()
    {

    }
}
