# Laravel-Version

This simple package reads a version.json (or whatever is configured) from your base_path() and gives you a version object, which you can utilize in your view.

````
 <p class="text-center">Laravel  @unless($version->isEmpty()) (Version: {{ $version->branch }}-{{ $version->build }}-{{ $version->hash }}) @endif</p>
````

No errors are thrown if the key doesn't exist or the json file is missing or invalid.

## Compatibility
This package was developed in Laravel 5.5, but should work in other versions as well.

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.