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
                'motivo' => 'Revision Ecografia',
                'date' => '2024-02-26',
                'time' => '15:00:00',
                'user_id' => 2,
                'paciente_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-02-04 00:49:00',
                'deleted_at' => NULL,
            ),
        ));


    }
}
