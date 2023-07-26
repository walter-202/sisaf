<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MedicamentosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('medicamentos')->delete();
        
        \DB::table('medicamentos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Tramadol',
                'descripcion' => 'Analgésico opioide atípico que alivia el dolor actuando sobre células nerviosas específicas de la médula espinal y del cerebro.',
                'costo' => '20',
                'cantidad' => '10',
                'costo_actual' => '15',
                'costo_ultimo' => '20',
                'created_at' => '2023-07-14 19:20:12',
                'updated_at' => '2023-07-14 19:20:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}