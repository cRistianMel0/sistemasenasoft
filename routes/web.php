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
    $sondeos = Sondeo::all();
        
    return view('index', ['sondeos'=>$sondeos]);
});


