<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Inicio1',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-documentation',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-13 22:18:50',
                'route' => 'voyager.dashboard',
                'parameters' => 'null',
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Multimedia',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-14 19:00:22',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Usuarios',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-14 19:00:29',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-14 19:00:27',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Herramientas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-14 19:00:22',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Diseñador de Menús',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-13 20:39:12',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Base de Datos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-13 20:39:12',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compás',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-13 20:39:12',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-13 20:39:12',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Parámetros',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 10,
                'created_at' => '2023-07-08 02:00:55',
                'updated_at' => '2023-07-14 19:00:22',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Materiales',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-archive',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2023-07-14 12:27:49',
                'updated_at' => '2023-07-14 19:00:29',
                'route' => 'voyager.materiales.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 1,
                'title' => 'Medicamentos',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lab',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2023-07-14 18:49:58',
                'updated_at' => '2023-07-14 19:00:27',
                'route' => 'voyager.medicamentos.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Servicios',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2023-07-14 18:51:23',
                'updated_at' => '2023-07-14 19:00:22',
                'route' => 'voyager.servicios.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Pacientes',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2023-07-14 18:58:42',
                'updated_at' => '2023-07-14 19:00:24',
                'route' => 'voyager.pacientes.index',
                'parameters' => NULL,
            ),
        ));
        
        
    }
}