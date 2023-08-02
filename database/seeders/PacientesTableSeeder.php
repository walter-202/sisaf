<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PacientesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pacientes')->delete();
        
        \DB::table('pacientes')->insert(array (
            0 => 
            array (
                'ciudad' => 'Oruro',
                'created_at' => '2023-07-14 19:47:26',
                'deleted_at' => NULL,
                'direccion' => 'Paseo Jáquez, 892, Ático 6º',
                'email' => 'campos.nadia@example.net',
                'fecha_de_nacimiento' => '1999-05-11 ',
                'id' => 1,
                'last_name' => 'Moreno',
                'name' => 'Paula Córdova',
                'sexo' => 'Femenino',
                'updated_at' => '2023-07-14 19:47:26',
            ),
            1 => 
            array (
                'ciudad' => 'La Paz',
                'created_at' => '2023-07-14 19:47:26',
                'deleted_at' => NULL,
                'direccion' => 'Paseo Menchaca, 29, 5º A',
                'email' => 'miriam70@example.org',
                'fecha_de_nacimiento' => '1975-10-18 ',
                'id' => 2,
                'last_name' => 'Ordoñez',
                'name' => 'Gonzalo Garibay Segundo',
                'sexo' => 'Masculino',
                'updated_at' => '2023-07-14 19:47:26',
            ),
            2 => 
            array (
                'ciudad' => 'La Paz',
                'created_at' => '2023-07-14 19:47:26',
                'deleted_at' => NULL,
                'direccion' => 'Camino Tórrez, 792, 47º E',
                'email' => 'gerard.covarrubias@example.com',
                'fecha_de_nacimiento' => '1982-09-24 ',
                'id' => 3,
                'last_name' => 'Ortíz',
                'name' => 'Iván Ceja',
                'sexo' => 'Masculino',
                'updated_at' => '2023-07-14 19:47:26',
            ),
            3 => 
            array (
                'ciudad' => 'Santa Cruz',
                'created_at' => '2023-07-14 19:47:26',
                'deleted_at' => NULL,
                'direccion' => 'Rúa Nayara, 8, 4º C',
                'email' => 'anaisabel91@example.org',
                'fecha_de_nacimiento' => '2018-10-06 ',
                'id' => 4,
                'last_name' => 'Zúñiga',
                'name' => 'Diana Mascareñas',
                'sexo' => 'Femenino',
                'updated_at' => '2023-07-14 19:47:26',
            ),
        ));
        
        
    }
}