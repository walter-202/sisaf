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
                'duracion' => 30,
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
                'duracion' => 15,
                'user_id' => 2,
                'paciente_id' => 1,
                'created_at' => '2024-02-02 10:55:36',
                'updated_at' => '2024-02-04 00:49:00',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'servicio_id' => 3,
                'motivo' => 'Fisioterapia TEST',
                'g_id' => '6nfug37c1th9b17rq1fpj49cto',
                'date' => '2024-03-08',
                'time' => '10:00:00',
                'duracion' => 30,
                'user_id' => 2,
                'paciente_id' => 1,
                'created_at' => '2024-03-05 22:34:38',
                'updated_at' => '2024-03-05 22:34:38',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'servicio_id' => 2,
                'motivo' => 'Revision Lumbar TEST',
                'g_id' => 'o8udjgmn7gvhiee8e9jlr5sni0',
                'date' => '2024-03-09',
                'time' => '09:00:00',
                'duracion' => 15,
                'user_id' => 2,
                'paciente_id' => 1,
                'created_at' => '2024-03-05 22:38:16',
                'updated_at' => '2024-03-05 22:38:16',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'servicio_id' => 3,
                'motivo' => 'Prueba',
                'g_id' => '4rpem02nre3ddivlhrma7mp4do',
                'date' => '2024-03-20',
                'time' => '15:00:00',
                'duracion' => 60,
                'user_id' => 2,
                'paciente_id' => 1,
                'created_at' => '2024-03-14 18:47:23',
                'updated_at' => '2024-03-14 18:47:23',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'servicio_id' => 3,
                'motivo' => 'Prueba 3',
                'g_id' => '5khto8jfotalcfakce4im7udp0',
                'date' => '2024-03-25',
                'time' => '14:15:00',
                'duracion' => 15,
                'user_id' => 2,
                'paciente_id' => 1,
                'created_at' => '2024-03-19 20:20:57',
                'updated_at' => '2024-03-19 20:20:57',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'servicio_id' => 3,
                'motivo' => 'Ecografia TEST',
                'g_id' => '29qpgu4dqjj06mkcml4cbntm5o',
                'date' => '2024-03-29',
                'time' => '14:30:00',
                'duracion' => 15,
                'user_id' => 2,
                'paciente_id' => 1,
                'created_at' => '2024-03-23 18:16:55',
                'updated_at' => '2024-03-23 18:16:55',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}