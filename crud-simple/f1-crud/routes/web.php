<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\CircuitoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PilotoController;
use App\Http\Controllers\ResultadoController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('circuitos', CircuitoController::class)->middleware('auth');
Route::resource('carreras', CarreraController::class)->middleware('auth');
Route::resource('equipos', EquipoController::class)->middleware('auth');
Route::resource('pilotos', PilotoController::class)->middleware('auth');
Route::resource('resultados', ResultadoController::class)->middleware('auth');
