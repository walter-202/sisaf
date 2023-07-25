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
                'color' => '#000000',
                'created_at' => '2023-07-08 02:00:55',
                'icon_class' => 'voyager-pie-chart',
                'id' => 1,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => 'null',
                'parent_id' => NULL,
                'route' => 'voyager.dashboard',
                'target' => '_self',
                'title' => 'Inicio',
                'updated_at' => '2023-07-25 00:22:08',
                'url' => '',
            ),
            1 => 
            array (
                'color' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'icon_class' => 'voyager-images',
                'id' => 2,
                'menu_id' => 1,
                'order' => 9,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.media.index',
                'target' => '_self',
                'title' => 'Multimedia',
                'updated_at' => '2023-07-25 00:20:14',
                'url' => '',
            ),
            2 => 
            array (
                'color' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'icon_class' => 'voyager-person',
                'id' => 3,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.users.index',
                'target' => '_self',
                'title' => 'Usuarios',
                'updated_at' => '2023-07-14 19:00:29',
                'url' => '',
            ),
            3 => 
            array (
                'color' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'icon_class' => 'voyager-lock',
                'id' => 4,
                'menu_id' => 1,
                'order' => 6,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.roles.index',
                'target' => '_self',
                'title' => 'Roles',
                'updated_at' => '2023-07-14 19:00:27',
                'url' => '',
            ),
            4 => 
            array (
                'color' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'icon_class' => 'voyager-tools',
                'id' => 5,
                'menu_id' => 1,
                'order' => 10,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Herramientas',
                'updated_at' => '2023-07-25 00:20:14',
                'url' => '',
            ),
            5 => 
            array (
                'color' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'icon_class' => 'voyager-list',
                'id' => 6,
                'menu_id' => 1,
                'order' => 1,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.menus.index',
                'target' => '_self',
                'title' => 'Diseñador de Menús',
                'updated_at' => '2023-07-13 20:39:12',
                'url' => '',
            ),
            6 => 
            array (
                'color' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'icon_class' => 'voyager-data',
                'id' => 7,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.database.index',
                'target' => '_self',
                'title' => 'Base de Datos',
                'updated_at' => '2023-07-13 20:39:12',
                'url' => '',
            ),
            7 => 
            array (
                'color' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'icon_class' => 'voyager-compass',
                'id' => 8,
                'menu_id' => 1,
                'order' => 3,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.compass.index',
                'target' => '_self',
                'title' => 'Compás',
                'updated_at' => '2023-07-13 20:39:12',
                'url' => '',
            ),
            8 => 
            array (
                'color' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'icon_class' => 'voyager-bread',
                'id' => 9,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => NULL,
                'parent_id' => 5,
                'route' => 'voyager.bread.index',
                'target' => '_self',
                'title' => 'BREAD',
                'updated_at' => '2023-07-13 20:39:12',
                'url' => '',
            ),
            9 => 
            array (
                'color' => NULL,
                'created_at' => '2023-07-08 02:00:55',
                'icon_class' => 'voyager-settings',
                'id' => 10,
                'menu_id' => 1,
                'order' => 11,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.settings.index',
                'target' => '_self',
                'title' => 'Parámetros',
                'updated_at' => '2023-07-25 00:20:14',
                'url' => '',
            ),
            10 => 
            array (
                'color' => NULL,
                'created_at' => '2023-07-14 12:27:49',
                'icon_class' => 'voyager-archive',
                'id' => 11,
                'menu_id' => 1,
                'order' => 4,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.materiales.index',
                'target' => '_self',
                'title' => 'Materiales',
                'updated_at' => '2023-07-14 19:00:29',
                'url' => '',
            ),
            11 => 
            array (
                'color' => NULL,
                'created_at' => '2023-07-14 18:49:58',
                'icon_class' => 'voyager-lab',
                'id' => 12,
                'menu_id' => 1,
                'order' => 5,
                'parameters' => NULL,
                'parent_id' => NULL,
                'route' => 'voyager.medicamentos.index',
                'target' => '_self',
                'title' => 'Medicamentos',
                'updated_at' => '2023-07-14 19:00:27',
                'url' => '',
            ),
            12 => 
            array (
                'color' => '#000000',
                'created_at' => '2023-07-14 18:51:23',
                'icon_class' => 'voyager-logbook',
                'id' => 13,
                'menu_id' => 1,
                'order' => 8,
                'parameters' => 'null',
                'parent_id' => NULL,
                'route' => 'voyager.servicios.index',
                'target' => '_self',
                'title' => 'Servicios',
                'updated_at' => '2023-07-25 00:21:35',
                'url' => '',
            ),
            13 => 
            array (
                'color' => '#000000',
                'created_at' => '2023-07-14 18:58:42',
                'icon_class' => 'voyager-people',
                'id' => 14,
                'menu_id' => 1,
                'order' => 2,
                'parameters' => 'null',
                'parent_id' => NULL,
                'route' => 'voyager.pacientes.index',
                'target' => '_self',
                'title' => 'Pacientes',
                'updated_at' => '2023-07-25 00:23:13',
                'url' => '',
            ),
            14 => 
            array (
                'color' => '#000000',
                'created_at' => '2023-07-25 00:19:53',
                'icon_class' => 'voyager-eye',
                'id' => 15,
                'menu_id' => 1,
                'order' => 7,
                'parameters' => '',
                'parent_id' => NULL,
                'route' => NULL,
                'target' => '_self',
                'title' => 'Administración',
                'updated_at' => '2023-07-25 00:20:14',
                'url' => 'auditoria',
            ),
        ));
        
        
    }
}