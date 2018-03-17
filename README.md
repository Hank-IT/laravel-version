# Laravel-Version

## Installation
> composer require mrcrankhank/laravel-update

If you run Laravel <= 5.4, add the service provider to the 'providers' array in config/app.php:
> MrCrankHank\LaravelVersion\VersionServiceProvider

Publish config file (only necessary if you don't want to use the default filename 'version.json')
> php artisan vendor:publish

This simple package reads a version.json (or whatever is configured) from your base_path() and gives you a version object, which you can utilize in your view.

````
 <p class="text-center">Laravel  @unless($version->isEmpty()) (Version: {{ $version->branch }}-{{ $version->build }}-{{ $version->hash }}) @endif</p>
````

No errors are thrown if the key doesn't exist or the json file is missing or invalid.

## Compatibility
This package was developed in Laravel 5.5, but should work in other versions as well.

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.