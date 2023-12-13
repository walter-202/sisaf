<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'Usuario',
                'display_name_plural' => 'Usuarios',
                'icon' => 'voyager-person',
                'model_name' => 'App\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'App\\Http\\Controllers\\UserController',
                'description' => 'Usuarios',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2023-07-14 15:13:44',
                'updated_at' => '2023-12-05 20:57:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menú',
                'display_name_plural' => 'Menús',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-07-14 15:13:44',
                'updated_at' => '2023-07-14 15:13:44',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Rol',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-07-14 15:13:44',
                'updated_at' => '2023-07-14 15:13:44',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Categoría',
                'display_name_plural' => 'Categorías',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-07-14 15:13:44',
                'updated_at' => '2023-07-14 15:13:44',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'posts',
                'slug' => 'posts',
                'display_name_singular' => 'Post',
                'display_name_plural' => 'Posts',
                'icon' => 'voyager-news',
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-07-14 15:13:44',
                'updated_at' => '2023-07-14 15:13:44',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Página',
                'display_name_plural' => 'Páginas',
                'icon' => 'voyager-file-text',
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2023-07-14 15:13:44',
                'updated_at' => '2023-07-14 15:13:44',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'materiales',
                'slug' => 'materiales',
                'display_name_singular' => 'Material',
                'display_name_plural' => 'Materiales',
                'icon' => 'voyager-archive',
                'model_name' => 'App\\Models\\Materiales',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-07-14 15:42:10',
                'updated_at' => '2023-12-08 21:00:15',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'medicamentos',
                'slug' => 'medicamentos',
                'display_name_singular' => 'Medicamento',
                'display_name_plural' => 'Medicamentos',
                'icon' => 'voyager-lab',
                'model_name' => 'App\\Models\\Medicamentos',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-07-14 18:49:58',
                'updated_at' => '2023-12-08 20:58:57',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'servicios',
                'slug' => 'servicios',
                'display_name_singular' => 'Servicio',
                'display_name_plural' => 'Servicios',
                'icon' => 'voyager-file-text',
                'model_name' => 'App\\Models\\Servicios',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-07-14 18:51:23',
                'updated_at' => '2023-12-08 21:01:08',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'pacientes',
                'slug' => 'pacientes',
                'display_name_singular' => 'Paciente',
                'display_name_plural' => 'Pacientes',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Models\\Pacientes',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2023-07-14 18:58:42',
                'updated_at' => '2023-12-12 20:39:40',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'audits',
                'slug' => 'audits',
                'display_name_singular' => 'Administración',
                'display_name_plural' => 'Administración',
                'icon' => 'voyager-eye',
                'model_name' => 'App\\Models\\Auditoria',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\AuditController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-07-25 00:46:07',
                'updated_at' => '2023-08-14 11:15:07',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'horarios',
                'slug' => 'horarios',
                'display_name_singular' => 'Horario',
                'display_name_plural' => 'Horarios',
                'icon' => 'voyager-calendar',
                'model_name' => 'App\\Models\\Horarios',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2023-08-02 12:19:34',
                'updated_at' => '2023-11-28 20:54:15',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'citas',
                'slug' => 'citas',
                'display_name_singular' => 'Cita',
                'display_name_plural' => 'Citas',
                'icon' => 'voyager-ticket',
                'model_name' => 'App\\Models\\Cita',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\CitaController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2023-08-21 02:10:14',
                'updated_at' => '2023-12-11 23:02:59',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'recetarios',
                'slug' => 'recetario',
                'display_name_singular' => 'Recetario',
                'display_name_plural' => 'Recetarios',
                'icon' => 'voyager-news',
                'model_name' => 'App\\Models\\Recetario',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2023-11-15 20:47:51',
                'updated_at' => '2023-11-15 20:47:51',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'historia',
                'slug' => 'historias-clinicas',
                'display_name_singular' => 'Historia Clínica',
                'display_name_plural' => 'Historias Clínicas',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\Models\\Historia',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2023-11-21 21:45:03',
                'updated_at' => '2023-11-21 21:45:03',
            ),
        ));
        
        
    }
}