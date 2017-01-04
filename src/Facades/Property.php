<?php namespace arnehendriksen\LaravelProperty\Facades;

use Illuminate\Support\Facades\Facade;
use arnehendriksen\LaravelProperty\Property as LaravelProperty;

class Property extends Facade {

    protected static function getFacadeAccessor() { return LaravelProperty::class; }

}
