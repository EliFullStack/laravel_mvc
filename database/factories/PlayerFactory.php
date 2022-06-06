<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{

    protected $model = Player::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstNameFemale(),
            'primer_apellido'=>$this->faker->lastName(),
            'segundo_apellid' =>$this->faker->lastName(),
            'fecha_nacimiento' =>$this->faker->date(),
            'posicion' =>$this->faker->randomElement(['Base','Escolta','Alero','Ala-Pivot','Pivot']),
            'id_equipo' =>$this->faker->numberBetween(1,5)
        ];
    }
}
