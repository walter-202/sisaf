<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AuditsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('audits')->delete();

        \DB::table('audits')->insert(array (
            0 =>
            array (
                'id' => 1,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'deleted',
                'auditable_type' => 'App\\Models\\Pacientes',
                'auditable_id' => 17,
                'old_values' => '{"id":17,"documento":"1072939","tipo_documento":"Carnet de Identidad","name":"Olga Mart\\u00ed","last_name":"Castellano","last_name_m":"Lozano","last_name_c":null,"email":"valdivia.marcos@example.org","celular":"7834310","direccion":"Ronda Cristian, 9, Bajo 0\\u00ba, 20740, As Luevano","sexo":"Masculino","fecha_de_nacimiento":"2015-01-03","ciudad":"Chuquisaca","barrio":"Plaza Luc\\u00eda, 8, 93\\u00ba 6\\u00ba","ocupacion":null,"grado":null,"edad":8,"referido":null,"familiar":null}',
                'new_values' => '[]',
                'url' => 'https://sisaf.test/admin/pacientes/0',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-12-15 11:18:11',
                'updated_at' => '2023-12-15 11:18:11',
                'deleted_at' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'restored',
                'auditable_type' => 'App\\Models\\User',
                'auditable_id' => 6,
                'old_values' => '[]',
                'new_values' => '{"id":6,"role_id":3,"name":"Enfermera Guadalupe","email":"guadalupe33@gmail.com","avatar":"users\\/default.png","email_verified_at":null,"remember_token":null,"settings":null}',
                'url' => 'https://sisaf.test/admin/users/6/restore',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-12-16 10:36:35',
                'updated_at' => '2023-12-16 10:36:35',
                'deleted_at' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'restored',
                'auditable_type' => 'App\\Models\\User',
                'auditable_id' => 6,
                'old_values' => '[]',
                'new_values' => '{"role_id":3,"name":"Enfermera Guadalupe","email":"guadalupe33@gmail.com","avatar":"users\\/default.png"}',
                'url' => 'https://sisaf.test/admin/users/6/restore',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-12-18 02:29:02',
                'updated_at' => '2023-12-18 02:29:02',
                'deleted_at' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'created',
                'auditable_type' => 'App\\Models\\Horarios',
                'auditable_id' => 8,
                'old_values' => '[]',
                'new_values' => '{"day":"Lunes","from":"09:00","to":"17:00","step":30,"off":0,"servicio_id":2}',
                'url' => 'http://sisaf.test/admin/servicios',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2024-01-16 21:14:55',
                'updated_at' => '2024-01-16 21:14:55',
                'deleted_at' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'created',
                'auditable_type' => 'App\\Models\\Horarios',
                'auditable_id' => 9,
                'old_values' => '[]',
                'new_values' => '{"day":"Martes","from":"09:00","to":"17:00","step":30,"off":0,"servicio_id":2}',
                'url' => 'http://sisaf.test/admin/servicios',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2024-01-16 21:14:55',
                'updated_at' => '2024-01-16 21:14:55',
                'deleted_at' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'created',
                'auditable_type' => 'App\\Models\\Horarios',
                'auditable_id' => 10,
                'old_values' => '[]',
                'new_values' => '{"day":"Mi\\u00e9rcoles","from":"09:00","to":"17:00","step":30,"off":0,"servicio_id":2}',
                'url' => 'http://sisaf.test/admin/servicios',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2024-01-16 21:14:55',
                'updated_at' => '2024-01-16 21:14:55',
                'deleted_at' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'created',
                'auditable_type' => 'App\\Models\\Horarios',
                'auditable_id' => 11,
                'old_values' => '[]',
                'new_values' => '{"day":"Jueves","from":"09:00","to":"17:00","step":30,"off":0,"servicio_id":2}',
                'url' => 'http://sisaf.test/admin/servicios',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2024-01-16 21:14:55',
                'updated_at' => '2024-01-16 21:14:55',
                'deleted_at' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'created',
                'auditable_type' => 'App\\Models\\Horarios',
                'auditable_id' => 12,
                'old_values' => '[]',
                'new_values' => '{"day":"Viernes","from":"09:00","to":"17:00","step":30,"off":0,"servicio_id":2}',
                'url' => 'http://sisaf.test/admin/servicios',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2024-01-16 21:14:55',
                'updated_at' => '2024-01-16 21:14:55',
                'deleted_at' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'created',
                'auditable_type' => 'App\\Models\\Horarios',
                'auditable_id' => 13,
                'old_values' => '[]',
                'new_values' => '{"day":"S\\u00e1bado","from":"09:00","to":"17:00","step":30,"off":0,"servicio_id":2}',
                'url' => 'http://sisaf.test/admin/servicios',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2024-01-16 21:14:55',
                'updated_at' => '2024-01-16 21:14:55',
                'deleted_at' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'created',
                'auditable_type' => 'App\\Models\\Horarios',
                'auditable_id' => 14,
                'old_values' => '[]',
                'new_values' => '{"day":"Domingo","from":"09:00","to":"17:00","step":30,"off":0,"servicio_id":2}',
                'url' => 'http://sisaf.test/admin/servicios',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2024-01-16 21:14:55',
                'updated_at' => '2024-01-16 21:14:55',
                'deleted_at' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'updated',
                'auditable_type' => 'App\\Models\\Horarios',
                'auditable_id' => 2,
                'old_values' => '{"from":"09:00:00"}',
                'new_values' => '{"from":"10:00"}',
                'url' => 'https://sisaf.test/admin/horarios/2',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2024-01-30 20:39:53',
                'updated_at' => '2024-01-30 20:39:53',
                'deleted_at' => NULL,
            ),
        ));


    }
}
