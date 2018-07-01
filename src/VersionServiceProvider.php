<?php

namespace MrCrankHank\LaravelVersion;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class VersionServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/version.php' => config_path('version.php'),
        ], 'config');

        $version = version();

        View::composer('*', function ($view) use ($version) {
            $view->with('version', $version);
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/version.php', 'version');
    }
}