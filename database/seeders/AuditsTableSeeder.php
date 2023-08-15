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
                'event' => 'created',
                'auditable_type' => 'App\\Models\\Servicios',
                'auditable_id' => 2,
                'old_values' => '[]',
                'new_values' => '{"name":"Traumatolog\\u00eda","precio":"250","id":2}',
                'url' => 'https://sisaf.test/admin/servicios',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-07-25 01:03:53',
                'updated_at' => '2023-07-31 21:59:35',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'updated',
                'auditable_type' => 'App\\Models\\Materiales',
                'auditable_id' => 2,
                'old_values' => '{"name":"Jeringas"}',
                'new_values' => '{"name":"Jeringas 1cc"}',
                'url' => 'https://sisaf.test/admin/materiales/2',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-08-03 00:40:16',
                'updated_at' => '2023-08-03 00:40:16',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'deleted',
                'auditable_type' => 'App\\Models\\Materiales',
                'auditable_id' => 1,
                'old_values' => '{"id":1,"name":"Pinzas","descripcion":"Pinzas de disecci\\u00f3n o pinzas m\\u00e9dicas","costo":"20","cantidad":"2","costo_ultimo":"20"}',
                'new_values' => '[]',
                'url' => 'https://sisaf.test/admin/materiales/1',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-08-11 21:18:22',
                'updated_at' => '2023-08-11 21:18:22',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'restored',
                'auditable_type' => 'App\\Models\\Materiales',
                'auditable_id' => 1,
                'old_values' => '[]',
                'new_values' => '{"id":1,"name":"Pinzas","descripcion":"Pinzas de disecci\\u00f3n o pinzas m\\u00e9dicas","costo":"20","cantidad":"2","costo_ultimo":"20"}',
                'url' => 'https://sisaf.test/admin/materiales/1/restore',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-08-11 21:23:24',
                'updated_at' => '2023-08-11 21:23:24',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'created',
                'auditable_type' => 'App\\Models\\Materiales',
                'auditable_id' => 3,
                'old_values' => '[]',
                'new_values' => '{"name":"prueba","descripcion":"Pinzas de disecci\\u00f3n o pinzas m\\u00e9dicas","costo":"20","cantidad":"123","costo_ultimo":"123","id":3}',
                'url' => 'https://sisaf.test/admin/materiales',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-08-11 21:23:43',
                'updated_at' => '2023-08-11 21:23:43',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'deleted',
                'auditable_type' => 'App\\Models\\Materiales',
                'auditable_id' => 3,
                'old_values' => '{"id":3,"name":"prueba","descripcion":"Pinzas de disecci\\u00f3n o pinzas m\\u00e9dicas","costo":"20","cantidad":"123","costo_ultimo":"123"}',
                'new_values' => '[]',
                'url' => 'https://sisaf.test/admin/materiales/0',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-08-11 21:23:51',
                'updated_at' => '2023-08-11 21:23:51',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'deleted',
                'auditable_type' => 'App\\Models\\Materiales',
                'auditable_id' => 2,
                'old_values' => '{"id":2,"name":"Jeringas 1cc","descripcion":"1 cc. o ml. Aguja de calibre de 27x5\\/8\\", Se coloca en 0\\u00ba - Para intrad\\u00e9rmicas","costo":"20","cantidad":"10","costo_ultimo":"20"}',
                'new_values' => '[]',
                'url' => 'https://sisaf.test/admin/materiales/0',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-08-11 21:24:04',
                'updated_at' => '2023-08-11 21:24:04',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'deleted',
                'auditable_type' => 'App\\Models\\Materiales',
                'auditable_id' => 1,
                'old_values' => '{"id":1,"name":"Pinzas","descripcion":"Pinzas de disecci\\u00f3n o pinzas m\\u00e9dicas","costo":"20","cantidad":"2","costo_ultimo":"20"}',
                'new_values' => '[]',
                'url' => 'https://sisaf.test/admin/materiales/0',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-08-11 21:24:04',
                'updated_at' => '2023-08-11 21:24:04',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'restored',
                'auditable_type' => 'App\\Models\\Materiales',
                'auditable_id' => 3,
                'old_values' => '[]',
                'new_values' => '{"id":3,"name":"prueba","descripcion":"Pinzas de disecci\\u00f3n o pinzas m\\u00e9dicas","costo":"20","cantidad":"123","costo_ultimo":"123"}',
                'url' => 'https://sisaf.test/admin/materiales/3/restore',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-08-11 21:25:13',
                'updated_at' => '2023-08-11 21:25:13',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'restored',
                'auditable_type' => 'App\\Models\\Materiales',
                'auditable_id' => 2,
                'old_values' => '[]',
                'new_values' => '{"id":2,"name":"Jeringas 1cc","descripcion":"1 cc. o ml. Aguja de calibre de 27x5\\/8\\", Se coloca en 0\\u00ba - Para intrad\\u00e9rmicas","costo":"20","cantidad":"10","costo_ultimo":"20"}',
                'url' => 'https://sisaf.test/admin/materiales/2/restore',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-08-11 21:25:16',
                'updated_at' => '2023-08-11 21:25:16',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'user_type' => 'App\\Models\\User',
                'user_id' => 2,
                'event' => 'restored',
                'auditable_type' => 'App\\Models\\Materiales',
                'auditable_id' => 1,
                'old_values' => '[]',
                'new_values' => '{"id":1,"name":"Pinzas","descripcion":"Pinzas de disecci\\u00f3n o pinzas m\\u00e9dicas","costo":"20","cantidad":"2","costo_ultimo":"20"}',
                'url' => 'https://sisaf.test/admin/materiales/1/restore',
                'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'tags' => NULL,
                'created_at' => '2023-08-11 21:25:19',
                'updated_at' => '2023-08-11 21:25:19',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}