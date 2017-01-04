<?php namespace arnehendriksen\LaravelProperty;

use Illuminate\Support\ServiceProvider;

class PropertyServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        return new Property();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
    }
}
