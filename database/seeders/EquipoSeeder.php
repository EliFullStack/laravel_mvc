<?php

namespace Database\Seeders;

use App\Models\Equipo;
use Illuminate\Database\Seeder;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipo = new Equipo();
        $equipo->nombre = 'Junior';
        $equipo->id_entidad = '1';
        $equipo->save();

        $equipo = new Equipo();
        $equipo->nombre = 'Cadete';
        $equipo->id_entidad = '1';
        $equipo->save();

        $equipo = new Equipo();
        $equipo->nombre = 'Junior';
        $equipo->id_entidad = '2';
        $equipo->save();

        $equipo = new Equipo();
        $equipo->nombre = 'Junior';
        $equipo->id_entidad = '3';
        $equipo->save();

        $equipo = new Equipo();
        $equipo->nombre = 'Cadete';
        $equipo->id_entidad = '2';
        $equipo->save();
    }
}
