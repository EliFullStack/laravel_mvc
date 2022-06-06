<?php

namespace Database\Seeders;

use App\Models\Equipo;
use App\Models\Partido;

use App\Models\Player;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /*Equipo::factory(5)->create();
        Partido::factory(5)->create();
        Entidad::factory(5)->create();
        Player::factory(10)->create();*/

        $this->call(EntidadSeeder::class);
        $this->call(EquipoSeeder::class);
        $this->call(PlayerSeeder::class);
        $this->call(PartidoSeeder::class);


    }
}
