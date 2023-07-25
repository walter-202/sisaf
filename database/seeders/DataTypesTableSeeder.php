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
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'created_at' => '2023-07-14 15:13:44',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Usuarios',
                'display_name_singular' => 'Usuario',
                'generate_permissions' => 1,
                'icon' => 'voyager-person',
                'id' => 1,
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'name' => 'users',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'server_side' => 0,
                'slug' => 'users',
                'updated_at' => '2023-07-24 23:37:03',
            ),
            1 => 
            array (
                'controller' => '',
                'created_at' => '2023-07-14 15:13:44',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Menús',
                'display_name_singular' => 'Menú',
                'generate_permissions' => 1,
                'icon' => 'voyager-list',
                'id' => 2,
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'name' => 'menus',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'menus',
                'updated_at' => '2023-07-14 15:13:44',
            ),
            2 => 
            array (
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'created_at' => '2023-07-14 15:13:44',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Roles',
                'display_name_singular' => 'Rol',
                'generate_permissions' => 1,
                'icon' => 'voyager-lock',
                'id' => 3,
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'name' => 'roles',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'roles',
                'updated_at' => '2023-07-14 15:13:44',
            ),
            3 => 
            array (
                'controller' => '',
                'created_at' => '2023-07-14 15:13:44',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Categorías',
                'display_name_singular' => 'Categoría',
                'generate_permissions' => 1,
                'icon' => 'voyager-categories',
                'id' => 4,
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'name' => 'categories',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'categories',
                'updated_at' => '2023-07-14 15:13:44',
            ),
            4 => 
            array (
                'controller' => '',
                'created_at' => '2023-07-14 15:13:44',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Posts',
                'display_name_singular' => 'Post',
                'generate_permissions' => 1,
                'icon' => 'voyager-news',
                'id' => 5,
                'model_name' => 'TCG\\Voyager\\Models\\Post',
                'name' => 'posts',
                'policy_name' => 'TCG\\Voyager\\Policies\\PostPolicy',
                'server_side' => 0,
                'slug' => 'posts',
                'updated_at' => '2023-07-14 15:13:44',
            ),
            5 => 
            array (
                'controller' => '',
                'created_at' => '2023-07-14 15:13:44',
                'description' => '',
                'details' => NULL,
                'display_name_plural' => 'Páginas',
                'display_name_singular' => 'Página',
                'generate_permissions' => 1,
                'icon' => 'voyager-file-text',
                'id' => 6,
                'model_name' => 'TCG\\Voyager\\Models\\Page',
                'name' => 'pages',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'pages',
                'updated_at' => '2023-07-14 15:13:44',
            ),
            6 => 
            array (
                'controller' => NULL,
                'created_at' => '2023-07-14 15:42:10',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'display_name_plural' => 'Materiales',
                'display_name_singular' => 'Material',
                'generate_permissions' => 1,
                'icon' => 'voyager-archive',
                'id' => 7,
                'model_name' => 'App\\Models\\Materiales',
                'name' => 'materiales',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'materiales',
                'updated_at' => '2023-07-14 15:42:10',
            ),
            7 => 
            array (
                'controller' => NULL,
                'created_at' => '2023-07-14 18:49:58',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'display_name_plural' => 'Medicamentos',
                'display_name_singular' => 'Medicamento',
                'generate_permissions' => 1,
                'icon' => 'voyager-lab',
                'id' => 10,
                'model_name' => 'App\\Models\\Medicamentos',
                'name' => 'medicamentos',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'medicamentos',
                'updated_at' => '2023-07-14 18:49:58',
            ),
            8 => 
            array (
                'controller' => NULL,
                'created_at' => '2023-07-14 18:51:23',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Servicios',
                'display_name_singular' => 'Servicio',
                'generate_permissions' => 1,
                'icon' => 'voyager-file-text',
                'id' => 11,
                'model_name' => 'App\\Models\\Servicios',
                'name' => 'servicios',
                'policy_name' => NULL,
                'server_side' => 0,
                'slug' => 'servicios',
                'updated_at' => '2023-07-14 18:55:49',
            ),
            9 => 
            array (
                'controller' => NULL,
                'created_at' => '2023-07-14 18:58:42',
                'description' => NULL,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'display_name_plural' => 'Pacientes',
                'display_name_singular' => 'Paciente',
                'generate_permissions' => 1,
                'icon' => 'voyager-people',
                'id' => 12,
                'model_name' => 'App\\Models\\Pacientes',
                'name' => 'pacientes',
                'policy_name' => NULL,
                'server_side' => 1,
                'slug' => 'pacientes',
                'updated_at' => '2023-07-24 23:35:53',
            ),
        ));
        
        
    }
}