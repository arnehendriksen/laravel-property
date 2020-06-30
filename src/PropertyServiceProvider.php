<?php

namespace ArneHendriksen\LaravelProperty;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class PropertyServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->singleton('property', function ($app) {
            return new Property();
        });
    }

    /**
     * Get the services provided by the provider.
     */
    public function provides()
    {
        return [
            'property',
        ];
    }
}
