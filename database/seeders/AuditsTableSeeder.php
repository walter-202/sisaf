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
                'updated_at' => '2023-07-25 01:03:53',
            ),
        ));
        
        
    }
}