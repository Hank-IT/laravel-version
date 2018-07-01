<?php

use MrCrankHank\LaravelVersion\Version;

if (!function_exists('version')) {
    function version()
    {
        $data = [];

        if (file_exists(base_path(config('version.filename', 'version.json')))) {
            $data = json_decode(file_get_contents(base_path(config('version.filename', 'version.json'))), true);
        }

        return new Version($data);
    }
}