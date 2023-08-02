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
                'auditable_id' => 1,
                'auditable_type' => 'App\\Models\\Audit',
                'created_at' => '2023-07-31 21:59:08',
                'deleted_at' => NULL,
                'event' => 'deleted',
                'id' => 2,
                'ip_address' => '127.0.0.1',
                'new_values' => '[]',
            'old_values' => '{"id":1,"user_type":"App\\\\Models\\\\User","user_id":2,"event":"created","auditable_type":"App\\\\Models\\\\Servicios","auditable_id":2,"old_values":"[]","new_values":"{\\"name\\":\\"Traumatolog\\\\u00eda\\",\\"precio\\":\\"250\\",\\"id\\":2}","url":"https:\\/\\/sisaf.test\\/admin\\/servicios","ip_address":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36","tags":null}',
                'tags' => NULL,
                'updated_at' => '2023-07-31 21:59:08',
                'url' => 'https://sisaf.test/admin/audits/1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
            2 => 
            array (
                'auditable_id' => 1,
                'auditable_type' => 'App\\Models\\Audit',
                'created_at' => '2023-07-31 21:59:35',
                'deleted_at' => NULL,
                'event' => 'restored',
                'id' => 3,
                'ip_address' => '127.0.0.1',
            'new_values' => '{"id":1,"user_type":"App\\\\Models\\\\User","user_id":2,"event":"created","auditable_type":"App\\\\Models\\\\Servicios","auditable_id":2,"old_values":"[]","new_values":"{\\"name\\":\\"Traumatolog\\\\u00eda\\",\\"precio\\":\\"250\\",\\"id\\":2}","url":"https:\\/\\/sisaf.test\\/admin\\/servicios","ip_address":"127.0.0.1","user_agent":"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/114.0.0.0 Safari\\/537.36","tags":null}',
                'old_values' => '[]',
                'tags' => NULL,
                'updated_at' => '2023-07-31 21:59:35',
                'url' => 'https://sisaf.test/admin/audits/1/restore',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36',
                'user_id' => 2,
                'user_type' => 'App\\Models\\User',
            ),
        ));
        
        
    }
}