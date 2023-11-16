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
            50 => 
            array (
                'id' => 61,
                'key' => 'browse_horarios',
                'table_name' => 'horarios',
                'created_at' => '2023-08-02 12:19:34',
                'updated_at' => '2023-08-02 12:19:34',
            ),
            51 => 
            array (
                'id' => 62,
                'key' => 'read_horarios',
                'table_name' => 'horarios',
                'created_at' => '2023-08-02 12:19:34',
                'updated_at' => '2023-08-02 12:19:34',
            ),
            52 => 
            array (
                'id' => 63,
                'key' => 'edit_horarios',
                'table_name' => 'horarios',
                'created_at' => '2023-08-02 12:19:34',
                'updated_at' => '2023-08-02 12:19:34',
            ),
            53 => 
            array (
                'id' => 64,
                'key' => 'add_horarios',
                'table_name' => 'horarios',
                'created_at' => '2023-08-02 12:19:34',
                'updated_at' => '2023-08-02 12:19:34',
            ),
            54 => 
            array (
                'id' => 65,
                'key' => 'delete_horarios',
                'table_name' => 'horarios',
                'created_at' => '2023-08-02 12:19:34',
                'updated_at' => '2023-08-02 12:19:34',
            ),
            55 => 
            array (
                'id' => 66,
                'key' => 'browse_citas',
                'table_name' => 'citas',
                'created_at' => '2023-08-21 02:10:14',
                'updated_at' => '2023-08-21 02:10:14',
            ),
            56 => 
            array (
                'id' => 67,
                'key' => 'read_citas',
                'table_name' => 'citas',
                'created_at' => '2023-08-21 02:10:14',
                'updated_at' => '2023-08-21 02:10:14',
            ),
            57 => 
            array (
                'id' => 68,
                'key' => 'edit_citas',
                'table_name' => 'citas',
                'created_at' => '2023-08-21 02:10:14',
                'updated_at' => '2023-08-21 02:10:14',
            ),
            58 => 
            array (
                'id' => 69,
                'key' => 'add_citas',
                'table_name' => 'citas',
                'created_at' => '2023-08-21 02:10:14',
                'updated_at' => '2023-08-21 02:10:14',
            ),
            59 => 
            array (
                'id' => 70,
                'key' => 'delete_citas',
                'table_name' => 'citas',
                'created_at' => '2023-08-21 02:10:14',
                'updated_at' => '2023-08-21 02:10:14',
            ),
            60 => 
            array (
                'id' => 71,
                'key' => 'browse_historia',
                'table_name' => 'historia',
                'created_at' => '2023-11-15 20:42:10',
                'updated_at' => '2023-11-15 20:42:10',
            ),
            61 => 
            array (
                'id' => 72,
                'key' => 'read_historia',
                'table_name' => 'historia',
                'created_at' => '2023-11-15 20:42:10',
                'updated_at' => '2023-11-15 20:42:10',
            ),
            62 => 
            array (
                'id' => 73,
                'key' => 'edit_historia',
                'table_name' => 'historia',
                'created_at' => '2023-11-15 20:42:10',
                'updated_at' => '2023-11-15 20:42:10',
            ),
            63 => 
            array (
                'id' => 74,
                'key' => 'add_historia',
                'table_name' => 'historia',
                'created_at' => '2023-11-15 20:42:10',
                'updated_at' => '2023-11-15 20:42:10',
            ),
            64 => 
            array (
                'id' => 75,
                'key' => 'delete_historia',
                'table_name' => 'historia',
                'created_at' => '2023-11-15 20:42:10',
                'updated_at' => '2023-11-15 20:42:10',
            ),
            65 => 
            array (
                'id' => 76,
                'key' => 'browse_recetarios',
                'table_name' => 'recetarios',
                'created_at' => '2023-11-15 20:47:51',
                'updated_at' => '2023-11-15 20:47:51',
            ),
            66 => 
            array (
                'id' => 77,
                'key' => 'read_recetarios',
                'table_name' => 'recetarios',
                'created_at' => '2023-11-15 20:47:51',
                'updated_at' => '2023-11-15 20:47:51',
            ),
            67 => 
            array (
                'id' => 78,
                'key' => 'edit_recetarios',
                'table_name' => 'recetarios',
                'created_at' => '2023-11-15 20:47:51',
                'updated_at' => '2023-11-15 20:47:51',
            ),
            68 => 
            array (
                'id' => 79,
                'key' => 'add_recetarios',
                'table_name' => 'recetarios',
                'created_at' => '2023-11-15 20:47:51',
                'updated_at' => '2023-11-15 20:47:51',
            ),
            69 => 
            array (
                'id' => 80,
                'key' => 'delete_recetarios',
                'table_name' => 'recetarios',
                'created_at' => '2023-11-15 20:47:51',
                'updated_at' => '2023-11-15 20:47:51',
            ),
        ));
        
        
    }
}