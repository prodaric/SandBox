<?php

namespace Prodaric\Sandbox;

use Illuminate\Support\ServiceProvider;

class SandboxServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/sandbox.php' => config_path('sandbox.php'),
        ]);
    }
    public function register()
    {
        
    }
}