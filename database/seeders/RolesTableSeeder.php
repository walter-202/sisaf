<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'administrator',
                'display_name' => 'Administrator',
                'created_at' => '2023-07-07 02:43:33',
                'updated_at' => '2023-07-08 01:06:23',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'enfermero',
                'display_name' => 'Enfermero/a',
                'created_at' => '2023-07-07 20:09:26',
                'updated_at' => '2023-07-07 20:09:26',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'developer',
                'display_name' => 'Developer',
                'created_at' => '2023-07-08 01:04:03',
                'updated_at' => '2023-07-08 01:04:03',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'ecografo',
                'display_name' => 'Ecógrafo',
                'created_at' => '2023-07-25 00:50:07',
                'updated_at' => '2023-07-25 00:50:07',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'asistente-ecografo',
                'display_name' => 'Asistente de Ecógrafo',
                'created_at' => '2023-07-25 00:50:58',
                'updated_at' => '2023-07-26 21:19:12',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'doctor',
                'display_name' => 'Doctor',
                'created_at' => '2023-08-01 00:05:53',
                'updated_at' => '2023-08-01 00:05:53',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'recepcion',
                'display_name' => 'Recepción',
                'created_at' => '2023-08-01 00:07:02',
                'updated_at' => '2023-08-01 00:07:02',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}