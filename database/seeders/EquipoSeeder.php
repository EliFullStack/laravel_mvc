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
        $equipo->nombre = "senior";
        $equipo->id_entidad = '1';

        $equipo->save();

        $equipo1 = new Equipo();
        $equipo1->nombre = "senior";
        $equipo1->id_entidad = '2';

        $equipo1->save();

        $equipo2 = new Equipo();
        $equipo2->nombre = "sub_22";
        $equipo2->id_entidad = '1';

        $equipo2->save();
    }
}
