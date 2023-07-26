<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            25 => 
            array (
                'id' => 36,
                'key' => 'browse_materiales',
                'table_name' => 'materiales',
                'created_at' => '2023-07-14 12:27:49',
                'updated_at' => '2023-07-14 12:27:49',
            ),
            26 => 
            array (
                'id' => 37,
                'key' => 'read_materiales',
                'table_name' => 'materiales',
                'created_at' => '2023-07-14 12:27:49',
                'updated_at' => '2023-07-14 12:27:49',
            ),
            27 => 
            array (
                'id' => 38,
                'key' => 'edit_materiales',
                'table_name' => 'materiales',
                'created_at' => '2023-07-14 12:27:49',
                'updated_at' => '2023-07-14 12:27:49',
            ),
            28 => 
            array (
                'id' => 39,
                'key' => 'add_materiales',
                'table_name' => 'materiales',
                'created_at' => '2023-07-14 12:27:49',
                'updated_at' => '2023-07-14 12:27:49',
            ),
            29 => 
            array (
                'id' => 40,
                'key' => 'delete_materiales',
                'table_name' => 'materiales',
                'created_at' => '2023-07-14 12:27:49',
                'updated_at' => '2023-07-14 12:27:49',
            ),
            30 => 
            array (
                'id' => 41,
                'key' => 'browse_medicamentos',
                'table_name' => 'medicamentos',
                'created_at' => '2023-07-14 18:49:58',
                'updated_at' => '2023-07-14 18:49:58',
            ),
            31 => 
            array (
                'id' => 42,
                'key' => 'read_medicamentos',
                'table_name' => 'medicamentos',
                'created_at' => '2023-07-14 18:49:58',
                'updated_at' => '2023-07-14 18:49:58',
            ),
            32 => 
            array (
                'id' => 43,
                'key' => 'edit_medicamentos',
                'table_name' => 'medicamentos',
                'created_at' => '2023-07-14 18:49:58',
                'updated_at' => '2023-07-14 18:49:58',
            ),
            33 => 
            array (
                'id' => 44,
                'key' => 'add_medicamentos',
                'table_name' => 'medicamentos',
                'created_at' => '2023-07-14 18:49:58',
                'updated_at' => '2023-07-14 18:49:58',
            ),
            34 => 
            array (
                'id' => 45,
                'key' => 'delete_medicamentos',
                'table_name' => 'medicamentos',
                'created_at' => '2023-07-14 18:49:58',
                'updated_at' => '2023-07-14 18:49:58',
            ),
            35 => 
            array (
                'id' => 46,
                'key' => 'browse_servicios',
                'table_name' => 'servicios',
                'created_at' => '2023-07-14 18:51:23',
                'updated_at' => '2023-07-14 18:51:23',
            ),
            36 => 
            array (
                'id' => 47,
                'key' => 'read_servicios',
                'table_name' => 'servicios',
                'created_at' => '2023-07-14 18:51:23',
                'updated_at' => '2023-07-14 18:51:23',
            ),
            37 => 
            array (
                'id' => 48,
                'key' => 'edit_servicios',
                'table_name' => 'servicios',
                'created_at' => '2023-07-14 18:51:23',
                'updated_at' => '2023-07-14 18:51:23',
            ),
            38 => 
            array (
                'id' => 49,
                'key' => 'add_servicios',
                'table_name' => 'servicios',
                'created_at' => '2023-07-14 18:51:23',
                'updated_at' => '2023-07-14 18:51:23',
            ),
            39 => 
            array (
                'id' => 50,
                'key' => 'delete_servicios',
                'table_name' => 'servicios',
                'created_at' => '2023-07-14 18:51:23',
                'updated_at' => '2023-07-14 18:51:23',
            ),
            40 => 
            array (
                'id' => 51,
                'key' => 'browse_pacientes',
                'table_name' => 'pacientes',
                'created_at' => '2023-07-14 18:58:42',
                'updated_at' => '2023-07-14 18:58:42',
            ),
            41 => 
            array (
                'id' => 52,
                'key' => 'read_pacientes',
                'table_name' => 'pacientes',
                'created_at' => '2023-07-14 18:58:42',
                'updated_at' => '2023-07-14 18:58:42',
            ),
            42 => 
            array (
                'id' => 53,
                'key' => 'edit_pacientes',
                'table_name' => 'pacientes',
                'created_at' => '2023-07-14 18:58:42',
                'updated_at' => '2023-07-14 18:58:42',
            ),
            43 => 
            array (
                'id' => 54,
                'key' => 'add_pacientes',
                'table_name' => 'pacientes',
                'created_at' => '2023-07-14 18:58:42',
                'updated_at' => '2023-07-14 18:58:42',
            ),
            44 => 
            array (
                'id' => 55,
                'key' => 'delete_pacientes',
                'table_name' => 'pacientes',
                'created_at' => '2023-07-14 18:58:42',
                'updated_at' => '2023-07-14 18:58:42',
            ),
            45 => 
            array (
                'id' => 56,
                'key' => 'browse_audits',
                'table_name' => 'audits',
                'created_at' => '2023-07-25 00:46:07',
                'updated_at' => '2023-07-25 00:46:07',
            ),
            46 => 
            array (
                'id' => 57,
                'key' => 'read_audits',
                'table_name' => 'audits',
                'created_at' => '2023-07-25 00:46:07',
                'updated_at' => '2023-07-25 00:46:07',
            ),
            47 => 
            array (
                'id' => 58,
                'key' => 'edit_audits',
                'table_name' => 'audits',
                'created_at' => '2023-07-25 00:46:07',
                'updated_at' => '2023-07-25 00:46:07',
            ),
            48 => 
            array (
                'id' => 59,
                'key' => 'add_audits',
                'table_name' => 'audits',
                'created_at' => '2023-07-25 00:46:07',
                'updated_at' => '2023-07-25 00:46:07',
            ),
            49 => 
            array (
                'id' => 60,
                'key' => 'delete_audits',
                'table_name' => 'audits',
                'created_at' => '2023-07-25 00:46:07',
                'updated_at' => '2023-07-25 00:46:07',
            ),
        ));
        
        
    }
}