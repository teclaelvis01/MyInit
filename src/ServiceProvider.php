<?php

namespace Teclaelvis\Myinit;

use Illuminate\Support\ServiceProvider;

class ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
       
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
         $this->app['myinit'] = $this->app->share(function($app){
            return new Myinit;
        });
    }
}
