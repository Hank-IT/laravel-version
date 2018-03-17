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

        $data = [];

        if (file_exists(base_path(config('version.filename', 'version.json')))) {
            $data = json_decode(file_get_contents(base_path(config('version.filename', 'version.json'))), true);
        }

        $version = new Version($data);

        View::composer('*', function ($view) use ($version) {
            $view->with('version', $version);
        });
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/version.php', 'version');
    }
}