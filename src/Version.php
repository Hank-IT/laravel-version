<?php

namespace MrCrankHank\LaravelVersion;

class Version
{
    protected $version;

    public function __construct($version = [])
    {
        $this->version = $version;
    }

    public function __get($name) {
        if (isset($this->version[$name])) {
            return $this->version[$name];
        }

        return null;
    }

    public function __isset($name) {
        return isset($this->version[$name]);
    }

    public function __toString() {
        return 'version';
    }

    public function isEmpty() {
        return empty($this->version);
    }
}