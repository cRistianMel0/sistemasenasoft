<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;
use App\Models\Sondeo;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SondeosController;
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
    $sondeos = Sondeo::all();
        
    return view('index', ['sondeos'=>$sondeos]);
});


Route::get('administrador', function(){
    return view('indexAdmin');
})->name('index.admin');

Route::get('/', 'SondeosController@index')->name('index');
Route::get('index','SondeosController@mostrarVistaSondeos')->name('sondeos.mostrarVistaSondeos');

// RUTAS CRITERIOS
Route::get('busquedaCriterios', 'CriteriosController@index')->name('sondeos.index');
Route::post('criterios/store', 'CriteriosController@store')->name('criterios.store');

// RUTAS TEMAS
Route::post('temas/store', 'TemasController@store')->name('temas.store');

// RUTAS SONDEOS
Route::get('sondeos/create', 'SondeosController@create')->name('sondeos.create');
Route::post('sondeos/store', 'SondeosController@store')->name('sondeos.store');

// RUTAS PREGUNTAS
Route::get('sondeos/{idSondeo}/preguntas/create', 'PreguntasController@create')->name('preguntas.create');
Route::post('preguntas/store', 'PreguntasController@store')->name('preguntas.store');



Route::get('index', 'SondeosController@index')->name('index');
/* Rutas para autenticación */
    Auth::routes();
    Route::middleware(['web'])->group(function () {
        // Aquí van las rutas de autenticación
        //Register
            Route::post('registro', 'App\Http\Controllers\Auth\RegisterController@store')->name('register.user');
            Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
        //--------
        //Login
            Route::post('/login', 'Auth\LoginController@login');
            Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
        //--------
        //logout
            Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
        //--------
    });
/* --------------------------- */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
