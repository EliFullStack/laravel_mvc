<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\EntidadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

Route::controller(EquipoController::class)->group(function() {//a partir de Laravel 9

    Route::get('equipos', 'index')->name('equipos.index');

    Route::get('equipos/create', 'create')->name('equipos.create');

    Route::get('equipos/{id}', 'show')->name('equipos.show');
});

Route::get('partidos', [PartidoController::class, 'index']);

Route::get('partidos/create', [PartidoController::class, 'create']);

Route::get('partidos/{partido}', [PartidoController::class, 'show']);



Route::get('entidades', [EntidadController::class, 'index']);

Route::get('entidades/{entidad}/{equipo?}/{player?}', [EntidadController::class, 'show']);


