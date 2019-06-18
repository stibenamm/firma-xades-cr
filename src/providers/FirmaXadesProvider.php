<?php
namespace Stibenamm\FirmaXadesCR\Providers;

use Illuminate\Support\ServiceProvider;
use Stibenamm\FirmaXadesCR\Firmador;

class FirmaXadesProvider extends ServiceProvider
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
        $this->app['FirmaXades'] = $this->app->singleton('Stibenamm\FirmaXadesCR\Contracts\FirmaXades', function($app) {
            return new Firmador();
        });
    }

    /**
    * Get the functions provided by the FirmaXades
    * @return [type] [description]
    */
    public function provides()
    {
        return ['Stibenamm\FirmaXadesCR\Contracts\FirmaXades'];
    }
}
