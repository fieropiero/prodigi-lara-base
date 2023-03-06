<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientiController;
use App\Http\Controllers\fattureController;
use App\Http\Controllers\ordiniController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/clienti', [clientiController::class, 'clienti']);
Route::get('/ordini', [ordiniController::class, 'ordini']);
Route::get('/fatture', [fattureController::class, 'fatture']);