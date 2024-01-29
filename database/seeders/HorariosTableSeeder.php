<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HorariosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('horarios')->delete();

        \DB::table('horarios')->insert(array (
            0 =>
            array (
                'id' => 1,
                'day' => 'Lunes',
                'from' => '09:00:00',
                'to' => '15:00:00',
                'step' => 30,
                'off' => 0,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'day' => 'Martes',
                'from' => '09:00:00',
                'to' => '15:00:00',
                'step' => 30,
                'off' => 0,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'day' => 'Miercoles',
                'from' => '09:00:00',
                'to' => '15:00:00',
                'step' => 30,
                'off' => 0,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'day' => 'Jueves',
                'from' => '09:00:00',
                'to' => '15:00:00',
                'step' => 30,
                'off' => 0,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'day' => 'Viernes',
                'from' => '09:00:00',
                'to' => '15:00:00',
                'step' => 30,
                'off' => 0,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'day' => 'Sabado',
                'from' => '09:00:00',
                'to' => '15:00:00',
                'step' => 30,
                'off' => 1,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'day' => 'Domingo',
                'from' => '09:00:00',
                'to' => '15:00:00',
                'step' => 30,
                'off' => 1,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
                'deleted_at' => NULL,
            ),
        ));


    }
}
