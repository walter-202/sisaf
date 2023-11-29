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
                'costo_ultimo' => '20',
                'created_at' => '2023-07-14 19:41:04',
                'deleted_at' => NULL,
                'descripcion' => 'Pinzas de disección o pinzas médicas',
                'id' => 1,
                'name' => 'Pinzas',
                'updated_at' => '2023-08-11 21:25:19',
            ),
            1 => 
            array (
                'cantidad' => '10',
                'costo' => '20',
                'costo_ultimo' => '20',
                'created_at' => '2023-07-24 23:45:00',
                'deleted_at' => NULL,
                'descripcion' => '1 cc. o ml. Aguja de calibre de 27x5/8", Se coloca en 0º - Para intradérmicas',
                'id' => 2,
                'name' => 'Jeringas 1cc',
                'updated_at' => '2023-08-11 21:25:16',
            ),
            2 => 
            array (
                'cantidad' => '123',
                'costo' => '20',
                'costo_ultimo' => '123',
                'created_at' => '2023-08-11 21:23:43',
                'deleted_at' => NULL,
                'descripcion' => 'Pinzas de disección o pinzas médicas',
                'id' => 3,
                'name' => 'prueba',
                'updated_at' => '2023-08-11 21:25:13',
            ),
        ));
        
        
    }
}