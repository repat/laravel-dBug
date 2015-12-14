<?php
namespace repat\LaravelDBug;

use Illuminate\Support\ServiceProvider;
use repat\LaravelDBug\DBugHelper;

class DBugServiceProvider extends ServiceProvider
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
    public function boot() {
    }
    
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('dBug', function () {
            return new DBugHelper();
        });
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return ['dBug'];
    }
}
