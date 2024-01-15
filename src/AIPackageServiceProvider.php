<?php

namespace AI;

use AI\Console\Commands\ChatCommand;
use Illuminate\Support\ServiceProvider;

class AIPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/openai.php' => config_path('openai.php'),
        ], 'config');

        // Register the command
        if ($this->app->runningInConsole()) {
            $this->commands([
                ChatCommand::class,
            ]);
        }
    }


    public function register()
    {
        // Register your package services here.
    }
}
