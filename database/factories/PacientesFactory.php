<?php

namespace Database\Factories;

use App\Models\Pacientes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
        $gender = ['Masculino', 'Femenino'];
        $cities = ['La Paz', 'Oruro', 'Santa Cruz', 'Cochabamba', 'Tarija', 'Potosi', 'Chuquisaca', 'Beni', 'Pando' ];
        $dateOfBirth=fake()->dateTimeBetween('-50 years', '-14 years')->format('Y-m-d');
        $today = Carbon::now();
        $age = $today->diffInYears($dateOfBirth);

        return [
            'documento' => fake()->randomNumber(7,true),
            'tipo_documento' => 'Carnet de Identidad',
            'name' => fake()->name(),
            'last_name' => fake()->lastName(),
            'last_name_m' => fake()->lastName(),
            'email' => fake()->unique()->email(),
            'celular' => fake()->numerify('7######'),
            'sexo' => $gender[rand(0,1)],
            'ciudad'=> $cities[rand(0,8)],
            'direccion' => fake()->address(),
            'barrio' => fake()->streetAddress(),
            'fecha_de_nacimiento' => $dateOfBirth,
            'edad' => $age,
        ];
    }

}
