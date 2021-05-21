<?php

namespace Mokhosh\Jarbon;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

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
        Carbon::macro('jormat', function ($format = null) {
            return JarbonUtils::format($this, $format);
        });
    }
}
