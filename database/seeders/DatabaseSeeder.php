<?php

namespace Database\Seeders;

use App\Models\Equipo;
use App\Models\Partido;

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
        Equipo::factory(5)->create();
        Partido::factory(5)->create();
    }
}
