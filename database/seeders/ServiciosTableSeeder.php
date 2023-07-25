<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ServiciosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('servicios')->delete();
        
        \DB::table('servicios')->insert(array (
            0 => 
            array (
                'created_at' => '2023-07-18 01:34:26',
                'deleted_at' => NULL,
                'id' => 1,
                'name' => 'Ecografía',
                'precio' => '100',
                'updated_at' => '2023-07-18 01:34:26',
            ),
        ));
        
        
    }
}