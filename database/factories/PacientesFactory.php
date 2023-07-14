<?php

namespace Database\Factories;

use App\Models\Pacientes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pacientes>
 */
class PacientesFactory extends Factory
{
    protected $model = Pacientes::class;
    /**
     * Define the model's default state.
     *
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $arrayValues = ['Masculino', 'Femenino'];
        $cities = ['La Paz', 'Oruro', 'Santa Cruz'];
        return [
            'name' => fake()->name(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'sexo' => $arrayValues[rand(0,1)],
            'direccion' => fake()->streetAddress(),
            'fecha_de_nacimiento' => fake()->date('Y-m-d ','now'),
            'ciudad'=> $cities[rand(0,2)],
        ];
    }

}
