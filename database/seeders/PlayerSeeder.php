<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $player = new Player();
        $player->nombre = 'Julia';
        $player->primer_apellido = 'Alvarez';
        $player->segundo_apellid = 'Toledo';
        $player->fecha_nacimiento = '2007/01/25';
        $player->posicion = 'pivot';
        $player->id_equipo = '2';
        $player->save();

        $player = new Player();
        $player->nombre = 'Ana';
        $player->primer_apellido = 'López';
        $player->segundo_apellid = 'García';
        $player->fecha_nacimiento = '2005/08/12';
        $player->posicion = 'alero';
        $player->id_equipo = '4';
        $player->save();

        $player = new Player();
        $player->nombre = 'Marta';
        $player->primer_apellido = 'García';
        $player->segundo_apellid = 'Farria';
        $player->fecha_nacimiento = '2007/05/03';
        $player->posicion = 'base';
        $player->id_equipo = '5';
        $player->save();

        $player = new Player();
        $player->nombre = 'María';
        $player->primer_apellido = 'Castro';
        $player->segundo_apellid = 'Benitez';
        $player->fecha_nacimiento = '2007/05/05';
        $player->posicion = 'pivot';
        $player->id_equipo = '5';
        $player->save();

        $player = new Player();
        $player->nombre = 'Marisa';
        $player->primer_apellido = 'García';
        $player->segundo_apellid = 'Soto';
        $player->fecha_nacimiento = '2005/03/13';
        $player->posicion = 'pivot';
        $player->id_equipo = '4';
        $player->save();

        $player = new Player();
        $player->nombre = 'Irene';
        $player->primer_apellido = 'Perez';
        $player->segundo_apellid = '';
        $player->fecha_nacimiento = '2007/01/15';
        $player->posicion = 'escolta';
        $player->id_equipo = '2';
        $player->save();

        $player = new Player();
        $player->nombre = 'Noelia';
        $player->primer_apellido = 'Fernández';
        $player->segundo_apellid = 'Maki';
        $player->fecha_nacimiento = '2005/01/11';
        $player->posicion = 'alero-pivot';
        $player->id_equipo = '3';
        $player->save();

    }
}
