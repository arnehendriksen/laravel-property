<?php

namespace ArneHendriksen\LaravelProperty\Facades;

use Illuminate\Support\Facades\Facade;

class Property extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'property';
    }
}
