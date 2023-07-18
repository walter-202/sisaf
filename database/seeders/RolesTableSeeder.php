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
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'enfermero',
                'display_name' => 'Enfermero/a',
                'created_at' => '2023-07-07 20:09:26',
                'updated_at' => '2023-07-07 20:09:26',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'developer',
                'display_name' => 'Developer',
                'created_at' => '2023-07-08 01:04:03',
                'updated_at' => '2023-07-08 01:04:03',
            ),
        ));
        
        
    }
}