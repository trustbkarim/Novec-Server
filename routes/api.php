<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Login route (public)
/* Route::post('/login', 'ConnectDisconnect\AuthentificationController@login')->name('login'); */

// Login route (public)
Route::post('/', 'ConnectDisconnect\AuthentificationController@login')->name('login');

// Logout route (private, just for the user)
Route::middleware('auth:api')->group(function (){
    Route::get('/logout', 'ConnectDisconnect\AuthentificationController@logout')->name('logout');
});

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

// Route pour paiement CRUD
Route::resource('paiement', 'API\PaiementController')
    ->middleware(['cors'])
    /*->middleware(['auth:api'])*/
    ->except(['create', 'edit']);

// Route pour Marché CRUD
Route::resource('marche', 'API\MarcheController')
    ->middleware(['cors'])
    /*->middleware(['auth:api'])*/
    ->except(['create', 'edit']);

// Route pour Ordres de service CRUD
Route::resource('OrdresService', 'API\OrdresServiceController')
    ->middleware(['cors'])
    /*->middleware(['auth:api'])*/
    ->except(['create', 'edit']);

// Route pour Rubrique CRUD
Route::resource('rubrique', 'API\RubriqueController')
    ->middleware(['cors'])
    /*->middleware(['auth:api'])*/
    ->except(['create', 'edit']);

// Route pour Sous-Rubrique CRUD
Route::resource('sousRubrique', 'API\SousRubriqueController')
    ->middleware(['cors'])
    /*->middleware(['auth:api'])*/
    ->except(['create', 'edit']);

// Route pour Constat CRUD
Route::resource('constat', 'API\ConstatController')
    ->middleware(['cors'])
    /*->middleware(['auth:api'])*/
    ->except(['create', 'edit']);

//Route pour Période CRUD
Route::resource('periode', 'API\PeriodeController')
    ->middleware(['cors'])
    /*->middleware(['auth:api'])*/
    ->except(['create', 'edit']);

// Route pour Sous-Rubrique view CRUD
Route::resource('sousRubriqueView', 'API\sousRubriqueViewController')
    ->middleware(['cors'])
    /*->middleware(['auth:api'])*/
    ->except(['create', 'edit']);

// Route pour Rubrique view CRUD
Route::resource('rubriqueView', 'API\RubriqueViewController')
    ->middleware(['cors'])
    /*->middleware(['auth:api'])*/
    ->except(['create', 'edit']);

// Route pour Marche view CRUD
Route::resource('marcheView', 'API\marcheViewController')
    ->middleware(['cors'])
    /*->middleware(['auth:api'])*/
    ->except(['create', 'edit']);

// Route pour Table Informations view CRUD
Route::resource('tableInformation', 'API\TableInformationsViewController')
    ->middleware(['cors'])
    /*->middleware(['auth:api'])*/
    ->except(['create', 'edit']);

// Route pour Table periodes view CRUD
Route::resource('distinctPeriodes', 'API\PeriodeViewController')
    ->middleware(['cors'])
    /*->middleware(['auth:api'])*/
    ->except(['create', 'edit']);
