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
                'cantidad' => '10',
                'costo' => '20',
                'costo_ultimo' => '20',
                'created_at' => '2023-07-14 19:20:12',
                'deleted_at' => NULL,
                'descripcion' => 'Analgésico opioide atípico que alivia el dolor actuando sobre células nerviosas específicas de la médula espinal y del cerebro.',
                'id' => 1,
                'name' => 'Tramadol',
                'updated_at' => '2023-07-14 19:20:12',
            ),
        ));
        
        
    }
}