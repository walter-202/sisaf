<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('citas')->delete();
        
        \DB::table('citas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'servicio_id' => 1,
                'motivo' => 'Revision Ecografia TEST',
                'date' => '2024-01-02',
                'time' => '22:10:00',
                'user_id' => 2,
                'paciente_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
            ),
        ));
        
        
    }
}