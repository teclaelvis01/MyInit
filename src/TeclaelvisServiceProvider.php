<?php

namespace Teclaelvis\Myinit;

use Illuminate\Support\ServiceProvider;

class TeclaelvisServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->app['Myinit'] = $this->app->share(function($app){
            return new Myinit;
        });

        $this->app->booting(function(){
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Myinit','Teclaelvis\Myinit\MyinitFacade');
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
