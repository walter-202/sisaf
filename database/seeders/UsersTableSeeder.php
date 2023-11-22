<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2023-07-07 02:43:33',
                'deleted_at' => NULL,
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Dr. Alanes',
                'password' => '$2y$10$diTIDr8EfGiyocGfjCcTXuRn8rQmlMdIMLyp/bHdG3CJfsAFO/olm',
                'remember_token' => '6pE1YvHj3wNhGYGjnn7ZdLKQeUxWVux0OLQjVQjblDluE4VZEvMsjXjqBYtl',
                'role_id' => 7,
                'settings' => '{"locale":"es"}',
                'updated_at' => '2023-08-01 00:09:38',
            ),
            1 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2023-07-07 20:10:45',
                'deleted_at' => NULL,
                'email' => 'wfernando.aguilarm@gmail.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'Walter Aguilar',
                'password' => '$2y$10$Hm8ZZR5G7fMSfo0dTtlhKuiFQy4RPb67d41QtMeX.pbR9BCLm1WfK',
                'remember_token' => 'OrskPaESAGn94Yg7ZEUPc7Ezqxjg7B5gmqJgPseCYzKKpqw3tUKPQjcRhxXi',
                'role_id' => 4,
                'settings' => '{"locale":"es"}',
                'updated_at' => '2023-11-09 19:20:20',
            ),
            2 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2023-07-14 19:08:52',
                'deleted_at' => NULL,
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'id' => 3,
                'name' => 'Dra. Cotrina',
                'password' => '$2y$10$s4b8Ijn07U5HjvxwHwMuTemS/3qgUtuHqfRBKRaHl7Hc5cZcAE4.K',
                'remember_token' => NULL,
                'role_id' => 3,
                'settings' => '{"locale":"es"}',
                'updated_at' => '2023-07-17 22:06:57',
            ),
            3 => 
            array (
                'avatar' => 'users/default.png',
                'created_at' => '2023-08-26 20:55:07',
                'deleted_at' => NULL,
                'email' => 'mvargaskari@gmail.com',
                'email_verified_at' => NULL,
                'id' => 4,
                'name' => 'testing',
                'password' => '$2y$10$3YtP9CBw7biiTPQW7IExO.ErrYFaikGxdtnZK4ob5d.t6IsuY1uk.',
                'remember_token' => NULL,
                'role_id' => 5,
                'settings' => '{"locale":"es"}',
                'updated_at' => '2023-11-15 21:15:11',
            ),
        ));
        
        
    }
}