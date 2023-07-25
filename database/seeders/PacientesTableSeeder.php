<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacientesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('pacientes')->delete();

        DB::table('pacientes')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Paula Córdova',
                'last_name' => 'Moreno',
                'email' => 'campos.nadia@example.net',
                'direccion' => 'Paseo Jáquez, 892, Ático 6º',
                'sexo' => 'Femenino',
                'fecha_de_nacimiento' => '1999-05-11 ',
                'ciudad' => 'Oruro',
                'created_at' => '2023-07-14 19:47:26',
                'updated_at' => '2023-07-14 19:47:26',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Gonzalo Garibay Segundo',
                'last_name' => 'Ordoñez',
                'email' => 'miriam70@example.org',
                'direccion' => 'Paseo Menchaca, 29, 5º A',
                'sexo' => 'Masculino',
                'fecha_de_nacimiento' => '1975-10-18 ',
                'ciudad' => 'La Paz',
                'created_at' => '2023-07-14 19:47:26',
                'updated_at' => '2023-07-14 19:47:26',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Iván Ceja',
                'last_name' => 'Ortíz',
                'email' => 'gerard.covarrubias@example.com',
                'direccion' => 'Camino Tórrez, 792, 47º E',
                'sexo' => 'Masculino',
                'fecha_de_nacimiento' => '1982-09-24 ',
                'ciudad' => 'La Paz',
                'created_at' => '2023-07-14 19:47:26',
                'updated_at' => '2023-07-14 19:47:26',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Diana Mascareñas',
                'last_name' => 'Zúñiga',
                'email' => 'anaisabel91@example.org',
                'direccion' => 'Rúa Nayara, 8, 4º C',
                'sexo' => 'Femenino',
                'fecha_de_nacimiento' => '2018-10-06 ',
                'ciudad' => 'Santa Cruz',
                'created_at' => '2023-07-14 19:47:26',
                'updated_at' => '2023-07-14 19:47:26',
            ),
        ));


    }
}
