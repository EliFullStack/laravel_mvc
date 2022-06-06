<?php

namespace Database\Factories;

use App\Models\Equipo;

use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{

    protected $model = Equipo::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            
        ];
    }
}
