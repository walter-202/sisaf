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
                'created_at' => '2023-07-07 02:43:33',
                'deleted_at' => NULL,
                'display_name' => 'Administrator',
                'id' => 1,
                'name' => 'administrator',
                'updated_at' => '2023-07-08 01:06:23',
            ),
            1 => 
            array (
                'created_at' => '2023-07-07 20:09:26',
                'deleted_at' => NULL,
                'display_name' => 'Enfermero/a',
                'id' => 3,
                'name' => 'enfermero',
                'updated_at' => '2023-07-07 20:09:26',
            ),
            2 => 
            array (
                'created_at' => '2023-07-08 01:04:03',
                'deleted_at' => NULL,
                'display_name' => 'Developer',
                'id' => 4,
                'name' => 'developer',
                'updated_at' => '2023-07-08 01:04:03',
            ),
            3 => 
            array (
                'created_at' => '2023-07-25 00:50:07',
                'deleted_at' => NULL,
                'display_name' => 'Ecógrafo',
                'id' => 5,
                'name' => 'ecografo',
                'updated_at' => '2023-07-25 00:50:07',
            ),
            4 => 
            array (
                'created_at' => '2023-07-25 00:50:58',
                'deleted_at' => NULL,
                'display_name' => 'Asistente de Ecógrafo',
                'id' => 6,
                'name' => 'asistente-ecografo',
                'updated_at' => '2023-07-26 21:19:12',
            ),
            5 => 
            array (
                'created_at' => '2023-08-01 00:05:53',
                'deleted_at' => NULL,
                'display_name' => 'Doctor',
                'id' => 7,
                'name' => 'doctor',
                'updated_at' => '2023-08-01 00:05:53',
            ),
            6 => 
            array (
                'created_at' => '2023-08-01 00:07:02',
                'deleted_at' => NULL,
                'display_name' => 'Recepción',
                'id' => 8,
                'name' => 'recepcion',
                'updated_at' => '2023-08-01 00:07:02',
            ),
        ));
        
        
    }
}