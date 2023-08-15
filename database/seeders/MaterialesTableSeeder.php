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
                'id' => 1,
                'name' => 'Pinzas',
                'descripcion' => 'Pinzas de disección o pinzas médicas',
                'costo' => '20',
                'cantidad' => '2',
                'costo_ultimo' => '20',
                'created_at' => '2023-07-14 19:41:04',
                'updated_at' => '2023-08-11 21:25:19',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Jeringas 1cc',
                'descripcion' => '1 cc. o ml. Aguja de calibre de 27x5/8", Se coloca en 0º - Para intradérmicas',
                'costo' => '20',
                'cantidad' => '10',
                'costo_ultimo' => '20',
                'created_at' => '2023-07-24 23:45:00',
                'updated_at' => '2023-08-11 21:25:16',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'prueba',
                'descripcion' => 'Pinzas de disección o pinzas médicas',
                'costo' => '20',
                'cantidad' => '123',
                'costo_ultimo' => '123',
                'created_at' => '2023-08-11 21:23:43',
                'updated_at' => '2023-08-11 21:25:13',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}