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
                'from' => '14:00:00',
                'to' => '17:00:00',
                'step' => 30,
                'status' => 1,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:03:59',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'day' => 'Martes',
                'from' => '14:00:00',
                'to' => '17:00:00',
                'step' => 60,
                'status' => 1,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:35:22',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'day' => 'Miercoles',
                'from' => '14:00:00',
                'to' => '17:00:00',
                'step' => 30,
                'status' => 1,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:03:48',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'day' => 'Jueves',
                'from' => '14:00:00',
                'to' => '17:00:00',
                'step' => 30,
                'status' => 1,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:03:36',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'day' => 'Viernes',
                'from' => '14:00:00',
                'to' => '17:00:00',
                'step' => 30,
                'status' => 1,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:03:23',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'day' => 'Sabado',
                'from' => '09:00:00',
                'to' => '15:00:00',
                'step' => 30,
                'status' => 0,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:03:05',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'day' => 'Domingo',
                'from' => '09:00:00',
                'to' => '15:00:00',
                'step' => 30,
                'status' => 0,
                'servicio_id' => 1,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:03:08',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'day' => 'Lunes',
                'from' => '14:00:00',
                'to' => '19:00:00',
                'step' => 15,
                'status' => 1,
                'servicio_id' => 2,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:03:59',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'day' => 'Martes',
                'from' => '09:00:00',
                'to' => '18:00:00',
                'step' => 15,
                'status' => 1,
                'servicio_id' => 2,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:35:22',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'day' => 'Miercoles',
                'from' => '14:00:00',
                'to' => '19:00:00',
                'step' => 15,
                'status' => 1,
                'servicio_id' => 2,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:03:48',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'day' => 'Jueves',
                'from' => '09:00:00',
                'to' => '18:00:00',
                'step' => 15,
                'status' => 1,
                'servicio_id' => 2,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:03:36',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'day' => 'Viernes',
                'from' => '14:00:00',
                'to' => '19:00:00',
                'step' => 15,
                'status' => 1,
                'servicio_id' => 2,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:03:23',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'day' => 'Sabado',
                'from' => '09:00:00',
                'to' => '12:00:00',
                'step' => 15,
                'status' => 1,
                'servicio_id' => 2,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:03:05',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'day' => 'Domingo',
                'from' => '09:00:00',
                'to' => '15:00:00',
                'step' => 30,
                'status' => 0,
                'servicio_id' => 2,
                'created_at' => '2024-01-02 10:55:36',
                'updated_at' => '2024-01-30 21:03:08',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}