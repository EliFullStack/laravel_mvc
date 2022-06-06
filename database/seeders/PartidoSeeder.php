<?php

namespace Database\Seeders;

use App\Models\Partido;
use Illuminate\Database\Seeder;

class PartidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partido = new Partido();
        $partido->fecha = '2022-07-03';
        $partido->hora = '11:00:00';
        $partido->puntos_equipo_local = '0';
        $partido->puntos_equipo_visitante = '0';
        $partido->estado_partido = 'pendiente';
        $partido->id_local = '2';
        $partido->id_visitante = '5';
        $partido->save();

        $partido = new Partido();
        $partido->fecha = '2022-05-15';
        $partido->hora = '18:00:00';
        $partido->puntos_equipo_local = '50';
        $partido->puntos_equipo_visitante = '45';
        $partido->estado_partido = 'jugado';
        $partido->id_local = '2';
        $partido->id_visitante = '5';
        $partido->save();

        $partido = new Partido();
        $partido->fecha = '2022-06-06';
        $partido->hora = '10:00:00';
        $partido->puntos_equipo_local = '0';
        $partido->puntos_equipo_visitante = '0';
        $partido->estado_partido = 'suspendido';
        $partido->id_local = '1';
        $partido->id_visitante = '3';
        $partido->save();


    }
}
