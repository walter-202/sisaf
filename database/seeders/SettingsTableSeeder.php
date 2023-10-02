<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'details' => '',
                'display_name' => 'Site Title',
                'group' => 'Site',
                'id' => 1,
                'key' => 'site.title',
                'order' => 2,
                'type' => 'text',
                'value' => 'Site Title',
            ),
            1 => 
            array (
                'details' => '',
                'display_name' => 'Site Description',
                'group' => 'Site',
                'id' => 2,
                'key' => 'site.description',
                'order' => 3,
                'type' => 'text',
                'value' => 'Site Description',
            ),
            2 => 
            array (
                'details' => '',
                'display_name' => 'Site Logo',
                'group' => 'Site',
                'id' => 3,
                'key' => 'site.logo',
                'order' => 4,
                'type' => 'image',
                'value' => '',
            ),
            3 => 
            array (
                'details' => '',
                'display_name' => 'Google Analytics Tracking ID',
                'group' => 'Site',
                'id' => 4,
                'key' => 'site.google_analytics_tracking_id',
                'order' => 1,
                'type' => 'text',
                'value' => NULL,
            ),
            4 => 
            array (
                'details' => '',
                'display_name' => 'Admin Background Image',
                'group' => 'Admin',
                'id' => 5,
                'key' => 'admin.bg_image',
                'order' => 4,
                'type' => 'image',
                'value' => 'settings\\July2023\\UFC90JuIt3w8E4NSPBDh.jpg',
            ),
            5 => 
            array (
                'details' => '',
                'display_name' => 'Admin Title',
                'group' => 'Admin',
                'id' => 6,
                'key' => 'admin.title',
                'order' => 1,
                'type' => 'text',
                'value' => 'SISAF - Admin',
            ),
            6 => 
            array (
                'details' => '',
                'display_name' => 'Admin Description',
                'group' => 'Admin',
                'id' => 7,
                'key' => 'admin.description',
                'order' => 1,
                'type' => 'text',
                'value' => 'Panel de Administración SISAF',
            ),
            7 => 
            array (
                'details' => '',
                'display_name' => 'Admin Loader',
                'group' => 'Admin',
                'id' => 8,
                'key' => 'admin.loader',
                'order' => 2,
                'type' => 'image',
                'value' => 'settings\\October2023\\2BDtN3xx6rvxgN2E6vx8.gif',
            ),
            8 => 
            array (
                'details' => '',
                'display_name' => 'Admin Icon Image',
                'group' => 'Admin',
                'id' => 9,
                'key' => 'admin.icon_image',
                'order' => 3,
                'type' => 'image',
                'value' => 'settings\\July2023\\4PdsD5KW3j7OefCLX1Sm.png',
            ),
            9 => 
            array (
                'details' => '',
            'display_name' => 'Google Analytics Client ID (used for admin dashboard)',
                'group' => 'Admin',
                'id' => 10,
                'key' => 'admin.google_analytics_client_id',
                'order' => 5,
                'type' => 'text',
                'value' => NULL,
            ),
        ));
        
        
    }
}