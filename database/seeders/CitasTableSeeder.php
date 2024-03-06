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
                'g_id' => '6r8urlgdt67t46664gqhvd1nnk',
                'date' => '2024-03-07',
                'time' => '16:30:00',
                'duracion' => '30',
                'user_id' => 2,
                'paciente_id' => 1,
                'created_at' => '2024-02-02 10:55:36',
                'updated_at' => '2024-02-04 00:49:00',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'servicio_id' => 2,
                'motivo' => 'Revision Lumbar',
                'g_id' => '9hd87ahe0e3g16pp47jmavkcps',
                'date' => '2024-03-08',
                'time' => '18:45:00',
                'duracion' => '15',
                'user_id' => 2,
                'paciente_id' => 1,
                'created_at' => '2024-02-02 10:55:36',
                'updated_at' => '2024-02-04 00:49:00',
                'deleted_at' => NULL,
            ),
        ));


    }
}
