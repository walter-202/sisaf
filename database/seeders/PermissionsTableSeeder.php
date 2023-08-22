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
                'created_at' => '2023-07-08 02:00:55',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2023-07-08 02:00:55',
            ),
            1 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2023-07-08 02:00:55',
            ),
            2 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2023-07-08 02:00:55',
            ),
            3 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2023-07-08 02:00:55',
            ),
            4 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2023-07-08 02:00:55',
            ),
            5 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            6 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            7 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            8 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            9 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            10 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            11 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            12 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            13 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            14 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            15 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            16 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            17 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            18 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            19 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            20 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            21 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            22 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            23 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            24 => 
            array (
                'created_at' => '2023-07-08 02:00:55',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2023-07-08 02:00:55',
            ),
            25 => 
            array (
                'created_at' => '2023-07-14 12:27:49',
                'id' => 36,
                'key' => 'browse_materiales',
                'table_name' => 'materiales',
                'updated_at' => '2023-07-14 12:27:49',
            ),
            26 => 
            array (
                'created_at' => '2023-07-14 12:27:49',
                'id' => 37,
                'key' => 'read_materiales',
                'table_name' => 'materiales',
                'updated_at' => '2023-07-14 12:27:49',
            ),
            27 => 
            array (
                'created_at' => '2023-07-14 12:27:49',
                'id' => 38,
                'key' => 'edit_materiales',
                'table_name' => 'materiales',
                'updated_at' => '2023-07-14 12:27:49',
            ),
            28 => 
            array (
                'created_at' => '2023-07-14 12:27:49',
                'id' => 39,
                'key' => 'add_materiales',
                'table_name' => 'materiales',
                'updated_at' => '2023-07-14 12:27:49',
            ),
            29 => 
            array (
                'created_at' => '2023-07-14 12:27:49',
                'id' => 40,
                'key' => 'delete_materiales',
                'table_name' => 'materiales',
                'updated_at' => '2023-07-14 12:27:49',
            ),
            30 => 
            array (
                'created_at' => '2023-07-14 18:49:58',
                'id' => 41,
                'key' => 'browse_medicamentos',
                'table_name' => 'medicamentos',
                'updated_at' => '2023-07-14 18:49:58',
            ),
            31 => 
            array (
                'created_at' => '2023-07-14 18:49:58',
                'id' => 42,
                'key' => 'read_medicamentos',
                'table_name' => 'medicamentos',
                'updated_at' => '2023-07-14 18:49:58',
            ),
            32 => 
            array (
                'created_at' => '2023-07-14 18:49:58',
                'id' => 43,
                'key' => 'edit_medicamentos',
                'table_name' => 'medicamentos',
                'updated_at' => '2023-07-14 18:49:58',
            ),
            33 => 
            array (
                'created_at' => '2023-07-14 18:49:58',
                'id' => 44,
                'key' => 'add_medicamentos',
                'table_name' => 'medicamentos',
                'updated_at' => '2023-07-14 18:49:58',
            ),
            34 => 
            array (
                'created_at' => '2023-07-14 18:49:58',
                'id' => 45,
                'key' => 'delete_medicamentos',
                'table_name' => 'medicamentos',
                'updated_at' => '2023-07-14 18:49:58',
            ),
            35 => 
            array (
                'created_at' => '2023-07-14 18:51:23',
                'id' => 46,
                'key' => 'browse_servicios',
                'table_name' => 'servicios',
                'updated_at' => '2023-07-14 18:51:23',
            ),
            36 => 
            array (
                'created_at' => '2023-07-14 18:51:23',
                'id' => 47,
                'key' => 'read_servicios',
                'table_name' => 'servicios',
                'updated_at' => '2023-07-14 18:51:23',
            ),
            37 => 
            array (
                'created_at' => '2023-07-14 18:51:23',
                'id' => 48,
                'key' => 'edit_servicios',
                'table_name' => 'servicios',
                'updated_at' => '2023-07-14 18:51:23',
            ),
            38 => 
            array (
                'created_at' => '2023-07-14 18:51:23',
                'id' => 49,
                'key' => 'add_servicios',
                'table_name' => 'servicios',
                'updated_at' => '2023-07-14 18:51:23',
            ),
            39 => 
            array (
                'created_at' => '2023-07-14 18:51:23',
                'id' => 50,
                'key' => 'delete_servicios',
                'table_name' => 'servicios',
                'updated_at' => '2023-07-14 18:51:23',
            ),
            40 => 
            array (
                'created_at' => '2023-07-14 18:58:42',
                'id' => 51,
                'key' => 'browse_pacientes',
                'table_name' => 'pacientes',
                'updated_at' => '2023-07-14 18:58:42',
            ),
            41 => 
            array (
                'created_at' => '2023-07-14 18:58:42',
                'id' => 52,
                'key' => 'read_pacientes',
                'table_name' => 'pacientes',
                'updated_at' => '2023-07-14 18:58:42',
            ),
            42 => 
            array (
                'created_at' => '2023-07-14 18:58:42',
                'id' => 53,
                'key' => 'edit_pacientes',
                'table_name' => 'pacientes',
                'updated_at' => '2023-07-14 18:58:42',
            ),
            43 => 
            array (
                'created_at' => '2023-07-14 18:58:42',
                'id' => 54,
                'key' => 'add_pacientes',
                'table_name' => 'pacientes',
                'updated_at' => '2023-07-14 18:58:42',
            ),
            44 => 
            array (
                'created_at' => '2023-07-14 18:58:42',
                'id' => 55,
                'key' => 'delete_pacientes',
                'table_name' => 'pacientes',
                'updated_at' => '2023-07-14 18:58:42',
            ),
            45 => 
            array (
                'created_at' => '2023-07-25 00:46:07',
                'id' => 56,
                'key' => 'browse_audits',
                'table_name' => 'audits',
                'updated_at' => '2023-07-25 00:46:07',
            ),
            46 => 
            array (
                'created_at' => '2023-07-25 00:46:07',
                'id' => 57,
                'key' => 'read_audits',
                'table_name' => 'audits',
                'updated_at' => '2023-07-25 00:46:07',
            ),
            47 => 
            array (
                'created_at' => '2023-07-25 00:46:07',
                'id' => 58,
                'key' => 'edit_audits',
                'table_name' => 'audits',
                'updated_at' => '2023-07-25 00:46:07',
            ),
            48 => 
            array (
                'created_at' => '2023-07-25 00:46:07',
                'id' => 59,
                'key' => 'add_audits',
                'table_name' => 'audits',
                'updated_at' => '2023-07-25 00:46:07',
            ),
            49 => 
            array (
                'created_at' => '2023-07-25 00:46:07',
                'id' => 60,
                'key' => 'delete_audits',
                'table_name' => 'audits',
                'updated_at' => '2023-07-25 00:46:07',
            ),
            50 => 
            array (
                'created_at' => '2023-08-02 12:19:34',
                'id' => 61,
                'key' => 'browse_horarios',
                'table_name' => 'horarios',
                'updated_at' => '2023-08-02 12:19:34',
            ),
            51 => 
            array (
                'created_at' => '2023-08-02 12:19:34',
                'id' => 62,
                'key' => 'read_horarios',
                'table_name' => 'horarios',
                'updated_at' => '2023-08-02 12:19:34',
            ),
            52 => 
            array (
                'created_at' => '2023-08-02 12:19:34',
                'id' => 63,
                'key' => 'edit_horarios',
                'table_name' => 'horarios',
                'updated_at' => '2023-08-02 12:19:34',
            ),
            53 => 
            array (
                'created_at' => '2023-08-02 12:19:34',
                'id' => 64,
                'key' => 'add_horarios',
                'table_name' => 'horarios',
                'updated_at' => '2023-08-02 12:19:34',
            ),
            54 => 
            array (
                'created_at' => '2023-08-02 12:19:34',
                'id' => 65,
                'key' => 'delete_horarios',
                'table_name' => 'horarios',
                'updated_at' => '2023-08-02 12:19:34',
            ),
            55 => 
            array (
                'created_at' => '2023-08-21 02:10:14',
                'id' => 66,
                'key' => 'browse_citas',
                'table_name' => 'citas',
                'updated_at' => '2023-08-21 02:10:14',
            ),
            56 => 
            array (
                'created_at' => '2023-08-21 02:10:14',
                'id' => 67,
                'key' => 'read_citas',
                'table_name' => 'citas',
                'updated_at' => '2023-08-21 02:10:14',
            ),
            57 => 
            array (
                'created_at' => '2023-08-21 02:10:14',
                'id' => 68,
                'key' => 'edit_citas',
                'table_name' => 'citas',
                'updated_at' => '2023-08-21 02:10:14',
            ),
            58 => 
            array (
                'created_at' => '2023-08-21 02:10:14',
                'id' => 69,
                'key' => 'add_citas',
                'table_name' => 'citas',
                'updated_at' => '2023-08-21 02:10:14',
            ),
            59 => 
            array (
                'created_at' => '2023-08-21 02:10:14',
                'id' => 70,
                'key' => 'delete_citas',
                'table_name' => 'citas',
                'updated_at' => '2023-08-21 02:10:14',
            ),
        ));
        
        
    }
}