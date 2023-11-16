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
                'costo' => '99',
                'cantidad' => '10',
                'costo_ultimo' => '20',
                'created_at' => '2023-07-14 19:20:00',
                'updated_at' => '2023-08-21 22:31:37',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}