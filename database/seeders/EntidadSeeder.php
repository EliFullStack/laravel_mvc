<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entidad;

class EntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entidad1 = new Entidad();
        $entidad1->nombre = 'Entidad A';
        $entidad1->save();

        $entidad2 = new Entidad();
        $entidad2->nombre = 'Entidad B';
        $entidad2->save();

        $entidad3 = new Entidad();
        $entidad3->nombre = 'Entidad C';
        $entidad3->save();

        $entidad4 = new Entidad();
        $entidad4->nombre = 'Entidad D';
        $entidad4->save();
    }
}
