<?php

namespace Database\Factories;

use App\Models\Partido;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartidoFactory extends Factory
{

    protected $model = Partido::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'fecha' => $this->faker->date(),
            'hora' => $this->faker->time(),
            'puntos_equipo_local' =>$this->faker->numberBetween(0, 100),
            'puntos_equipo_visitante' =>$this->faker->numberBetween(0, 100),
            'estado_partido' =>$this->faker->randomElement(['Jugado','Pendiente','Suspendido']),
            'id_visitante'=>$this->faker->numberBetween(1,5),
            'id_local'=>$this->faker->numberBetween(1,5)
        ];
    }
}
