<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\PartidoController;

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

    Route::get('equipos', 'index');

    Route::get('equipos/create', 'create');

    Route::get('equipos/{team}', 'show');
});

Route::get('partidos', [PartidoController::class, 'index']);

Route::get('partidos/create', [PartidoController::class, 'create']);

Route::get('partidos/{partido}', [PartidoController::class, 'show']);

Route::get('planteles', function () {
    return "PLANTELES DE JUGADORAS";
});

Route::get('entidades', function () {
    return "ESTAS SON LAS ENTIDADES";
});

Route::get('entidades/{entidad}/{equipo?}/{player?}', function($entidad, $equipo = null, $player = null) {
    if($player) {
        return "Esta es la jugadora $player, del equipo $equipo, que pertenece a $entidad";
    } elseif ($equipo) {
        return "Este es el equipo $equipo, que pertenece a $entidad";
    } else {
        return "ENTIDAD: $entidad";
    };
    
});


