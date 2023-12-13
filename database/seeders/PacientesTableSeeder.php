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
                'id' => 1,
                'name' => 'Jimmy',
                'last_name' => 'Requena',
                'last_name_m' => 'Llorentty',
                'last_name_c' => NULL,
                'email' => 'jim@bolivianotech.com',
                'direccion' => 'La Paz, Landaeta',
                'sexo' => 'Masculino',
                'fecha_de_nacimiento' => '12/04/1990',
                'ciudad' => 'La Paz',
                'barrio' => NULL,
                'ocupacion' => NULL,
                'grado' => NULL,
                'edad' => NULL,
                'referido' => NULL,
                'familiar' => NULL,
                'created_at' => '2023-08-21 00:43:53',
                'updated_at' => '2023-08-26 17:38:59',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}