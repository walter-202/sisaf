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
                'auditable_id' => 2,
                'auditable_type' => 'App\\Models\\Servicios',
                'created_at' => '2023-07-25 01:03:53',
                'deleted_at' => NULL,
                'event' => 'created',
                'id' => 1,
                'ip_address' => '127.0.0.1',
                'new_values' => '{"name":"Traumatolog\\u00eda","precio":"250","id":2}',
                'old_values' => '[]',
                'tags' => NULL,
                'updated_at' => '2023-07-31 21:59:35',
                'url' => 'https://sisaf.test/admin/servicios',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
            1 => 
            array (
                'auditable_id' => 2,
                'auditable_type' => 'App\\Models\\Materiales',
                'created_at' => '2023-08-03 00:40:16',
                'deleted_at' => NULL,
                'event' => 'updated',
                'id' => 2,
                'ip_address' => '127.0.0.1',
                'new_values' => '{"name":"Jeringas 1cc"}',
                'old_values' => '{"name":"Jeringas"}',
                'tags' => NULL,
                'updated_at' => '2023-08-03 00:40:16',
                'url' => 'https://sisaf.test/admin/materiales/2',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
            2 => 
            array (
                'auditable_id' => 1,
                'auditable_type' => 'App\\Models\\Materiales',
                'created_at' => '2023-08-11 21:18:22',
                'deleted_at' => NULL,
                'event' => 'deleted',
                'id' => 3,
                'ip_address' => '127.0.0.1',
                'new_values' => '[]',
                'old_values' => '{"id":1,"name":"Pinzas","descripcion":"Pinzas de disecci\\u00f3n o pinzas m\\u00e9dicas","costo":"20","cantidad":"2","costo_ultimo":"20"}',
                'tags' => NULL,
                'updated_at' => '2023-08-11 21:18:22',
                'url' => 'https://sisaf.test/admin/materiales/1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
            3 => 
            array (
                'auditable_id' => 1,
                'auditable_type' => 'App\\Models\\Materiales',
                'created_at' => '2023-08-11 21:23:24',
                'deleted_at' => NULL,
                'event' => 'restored',
                'id' => 4,
                'ip_address' => '127.0.0.1',
                'new_values' => '{"id":1,"name":"Pinzas","descripcion":"Pinzas de disecci\\u00f3n o pinzas m\\u00e9dicas","costo":"20","cantidad":"2","costo_ultimo":"20"}',
                'old_values' => '[]',
                'tags' => NULL,
                'updated_at' => '2023-08-11 21:23:24',
                'url' => 'https://sisaf.test/admin/materiales/1/restore',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
            4 => 
            array (
                'auditable_id' => 3,
                'auditable_type' => 'App\\Models\\Materiales',
                'created_at' => '2023-08-11 21:23:43',
                'deleted_at' => NULL,
                'event' => 'created',
                'id' => 5,
                'ip_address' => '127.0.0.1',
                'new_values' => '{"name":"prueba","descripcion":"Pinzas de disecci\\u00f3n o pinzas m\\u00e9dicas","costo":"20","cantidad":"123","costo_ultimo":"123","id":3}',
                'old_values' => '[]',
                'tags' => NULL,
                'updated_at' => '2023-08-11 21:23:43',
                'url' => 'https://sisaf.test/admin/materiales',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
            5 => 
            array (
                'auditable_id' => 3,
                'auditable_type' => 'App\\Models\\Materiales',
                'created_at' => '2023-08-11 21:23:51',
                'deleted_at' => NULL,
                'event' => 'deleted',
                'id' => 6,
                'ip_address' => '127.0.0.1',
                'new_values' => '[]',
                'old_values' => '{"id":3,"name":"prueba","descripcion":"Pinzas de disecci\\u00f3n o pinzas m\\u00e9dicas","costo":"20","cantidad":"123","costo_ultimo":"123"}',
                'tags' => NULL,
                'updated_at' => '2023-08-11 21:23:51',
                'url' => 'https://sisaf.test/admin/materiales/0',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
            6 => 
            array (
                'auditable_id' => 2,
                'auditable_type' => 'App\\Models\\Materiales',
                'created_at' => '2023-08-11 21:24:04',
                'deleted_at' => NULL,
                'event' => 'deleted',
                'id' => 7,
                'ip_address' => '127.0.0.1',
                'new_values' => '[]',
                'old_values' => '{"id":2,"name":"Jeringas 1cc","descripcion":"1 cc. o ml. Aguja de calibre de 27x5\\/8\\", Se coloca en 0\\u00ba - Para intrad\\u00e9rmicas","costo":"20","cantidad":"10","costo_ultimo":"20"}',
                'tags' => NULL,
                'updated_at' => '2023-08-11 21:24:04',
                'url' => 'https://sisaf.test/admin/materiales/0',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
            7 => 
            array (
                'auditable_id' => 1,
                'auditable_type' => 'App\\Models\\Materiales',
                'created_at' => '2023-08-11 21:24:04',
                'deleted_at' => NULL,
                'event' => 'deleted',
                'id' => 8,
                'ip_address' => '127.0.0.1',
                'new_values' => '[]',
                'old_values' => '{"id":1,"name":"Pinzas","descripcion":"Pinzas de disecci\\u00f3n o pinzas m\\u00e9dicas","costo":"20","cantidad":"2","costo_ultimo":"20"}',
                'tags' => NULL,
                'updated_at' => '2023-08-11 21:24:04',
                'url' => 'https://sisaf.test/admin/materiales/0',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
            8 => 
            array (
                'auditable_id' => 3,
                'auditable_type' => 'App\\Models\\Materiales',
                'created_at' => '2023-08-11 21:25:13',
                'deleted_at' => NULL,
                'event' => 'restored',
                'id' => 9,
                'ip_address' => '127.0.0.1',
                'new_values' => '{"id":3,"name":"prueba","descripcion":"Pinzas de disecci\\u00f3n o pinzas m\\u00e9dicas","costo":"20","cantidad":"123","costo_ultimo":"123"}',
                'old_values' => '[]',
                'tags' => NULL,
                'updated_at' => '2023-08-11 21:25:13',
                'url' => 'https://sisaf.test/admin/materiales/3/restore',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
            9 => 
            array (
                'auditable_id' => 7,
                'auditable_type' => 'App\\Models\\Cita',
                'created_at' => '2023-08-21 04:08:05',
                'deleted_at' => NULL,
                'event' => 'created',
                'id' => 19,
                'ip_address' => '127.0.0.1',
                'new_values' => '{"user_id":"2","date":"2023-08-21T00:00:00.000000Z","time":"15:10","id":7}',
                'old_values' => '[]',
                'tags' => NULL,
                'updated_at' => '2023-08-21 04:08:05',
                'url' => 'https://sisaf.test/admin/citas',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
            10 => 
            array (
                'auditable_id' => 2,
                'auditable_type' => 'App\\Models\\Servicios',
                'created_at' => '2023-10-02 00:46:45',
                'deleted_at' => NULL,
                'event' => 'created',
                'id' => 99,
                'ip_address' => '192.168.1.200',
                'new_values' => '{"name":"Enfermer\\u00eda","precio":"50","id":2}',
                'old_values' => '[]',
                'tags' => NULL,
                'updated_at' => '2023-10-02 00:46:45',
                'url' => 'https://sisaf.test/admin/servicios',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
            11 => 
            array (
                'auditable_id' => 3,
                'auditable_type' => 'App\\Models\\Servicios',
                'created_at' => '2023-10-02 00:47:03',
                'deleted_at' => NULL,
                'event' => 'created',
                'id' => 100,
                'ip_address' => '192.168.1.200',
                'new_values' => '{"name":"Consultorio M\\u00e9dico","precio":"75","id":3}',
                'old_values' => '[]',
                'tags' => NULL,
                'updated_at' => '2023-10-02 00:47:03',
                'url' => 'https://sisaf.test/admin/servicios',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
        ));
        
        
    }
}