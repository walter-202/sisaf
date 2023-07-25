<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MaterialesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('materiales')->delete();
        
        \DB::table('materiales')->insert(array (
            0 => 
            array (
                'cantidad' => '2',
                'costo' => '20',
                'costo_actual' => '15',
                'costo_ultimo' => '20',
                'created_at' => '2023-07-14 19:41:04',
                'deleted_at' => NULL,
                'descripcion' => 'Pinzas de disección o pinzas médicas',
                'id' => 1,
                'name' => 'Pinzas',
                'updated_at' => '2023-07-14 19:41:04',
            ),
            1 => 
            array (
                'cantidad' => '10',
                'costo' => '20',
                'costo_actual' => '15',
                'costo_ultimo' => '20',
                'created_at' => '2023-07-24 23:45:34',
                'deleted_at' => NULL,
                'descripcion' => '1 cc. o ml. Aguja de calibre de 27x5/8", Se coloca en 0º - Para intradérmicas',
                'id' => 2,
                'name' => 'Jeringas',
                'updated_at' => '2023-07-24 23:45:34',
            ),
        ));
        
        
    }
}