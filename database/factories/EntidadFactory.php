<?php

namespace Database\Factories;

use App\Models\Entidad;

use Illuminate\Database\Eloquent\Factories\Factory;

class EntidadFactory extends Factory
{
    protected $model = Entidad::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence()
        ];
    }
}
