<?php
namespace repat\LaravelDBug;

use Illuminate\Support\Facades\Facade;

class DBugFacade extends Facade
{
    
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'dBug';
    }
}

