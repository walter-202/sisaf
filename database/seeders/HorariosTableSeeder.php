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
                'from' => '9:00',
                'to' => '15:00',
                'step' => 30,
                'off' => false,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
            ),
            1 =>
            array (
                'id' => 2,
                'day' => 'Martes',
                'from' => '9:00',
                'to' => '15:00',
                'step' => 30,
                'off' => false,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
            ),
            2 =>
            array (
                'id' => 3,
                'day' => 'Miercoles',
                'from' => '9:00',
                'to' => '15:00',
                'step' => 30,
                'off' => false,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
            ),
            3 =>
            array (
                'id' => 4,
                'day' => 'Jueves',
                'from' => '9:00',
                'to' => '15:00',
                'step' => 30,
                'off' => false,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
            ),
            4 =>
            array (
                'id' => 5,
                'day' => 'Viernes',
                'from' => '9:00',
                'to' => '15:00',
                'step' => 30,
                'off' => false,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
            ),
            5 =>
            array (
                'id' => 6,
                'day' => 'Sabado',
                'from' => '9:00',
                'to' => '15:00',
                'step' => 30,
                'off' => true,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
            ),
            6 =>
            array (
                'id' => 7,
                'day' => 'Domingo',
                'from' => '9:00',
                'to' => '15:00',
                'step' => 30,
                'off' => true,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-02 10:55:36',
            ),
        ));


    }
}
