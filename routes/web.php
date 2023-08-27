<?php

use App\Http\Controllers\ProfileController;
use App\Models\Sondeo;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('indexAdmin');

    // $sondeos = Sondeo::all();
    
    // return view('index', ['sondeos'=>$sondeos]);
});

Route::get('index', 'SondeosController@index')->name('index');


// RUTAS CRITERIOS
Route::post('criterios/store', 'CriteriosController@store')->name('criterios.store');

// RUTAS TEMAS
Route::post('temas/store', 'TemasController@store')->name('temas.store');

// RUTAS SONDEOS
Route::get('sondeos/create', 'SondeosController@create')->name('sondeos.create');
Route::post('sondeos/store', 'SondeosController@store')->name('sondeos.store');

// RUTAS PREGUNTAS
Route::get('sondeos/{idSondeo}/preguntas/create', 'PreguntasController@create')->name('preguntas.create');
Route::post('preguntas/store', 'PreguntasController@store')->name('preguntas.store');



