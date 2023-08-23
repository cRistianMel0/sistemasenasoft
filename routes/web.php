<?php

use App\Http\Controllers\ProfileController;
use App\Models\Sondeo;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/', function (Request $request) {
    $sondeos = Sondeo::all();
        
    return view('index', ['sondeos'=>$sondeos]);
});



Route::get('/', 'SondeosController@index')->name('index');
Route::get('index','SondeosController@mostrarVistaSondeos')->name('sondeos.mostrarVistaSondeos');
Route::get('sondeos.index', 'CriteriosController@index')->name('sondeos.index');
/* Route::get('/', 'SondeosController@buscarSondeosAjax')->name('buscar.sondeos.ajax'); */




