<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));

        /*
        Route::group([
            'middleware' => ['api', 'cors'],
            'namespace' => $this->namespace,
            'prefix' => 'api',
        ], function ($router) {

            // Route pour paiement CRUD
            Route::resource('paiement', 'API\PaiementController')
                ->except(['create', 'edit']);

            // Route pour Marché CRUD
            Route::resource('marche', 'API\MarcheController')
                ->except(['create', 'edit']);

            // Route pour Ordres de service CRUD
            Route::resource('OrdresService', 'API\OrdresServiceController')
                ->except(['create', 'edit']);

            // Route pour Rubrique CRUD
            Route::resource('rubrique', 'API\RubriqueController')
                ->except(['create', 'edit']);

            // Route pour Sous-Rubrique CRUD
            Route::resource('sousRubrique', 'API\SousRubriqueController')
                ->except(['create', 'edit']);

            // Route pour Constat CRUD
            Route::resource('constat', 'API\ConstatController')
                ->except(['create', 'edit']);

            //Route pour Période CRUD
            Route::resource('periode', 'API\PeriodeController')
                ->except(['create', 'edit']);
        });
        */
    }
}
