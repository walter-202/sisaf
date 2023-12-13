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
                'id' => 1,
                'role_id' => 7,
                'name' => 'Dr. Alanes',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$diTIDr8EfGiyocGfjCcTXuRn8rQmlMdIMLyp/bHdG3CJfsAFO/olm',
                'remember_token' => '6pE1YvHj3wNhGYGjnn7ZdLKQeUxWVux0OLQjVQjblDluE4VZEvMsjXjqBYtl',
                'settings' => '{"locale":"es"}',
                'created_at' => '2023-07-07 02:43:33',
                'updated_at' => '2023-08-01 00:09:38',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 4,
                'name' => 'Walter Aguilar',
                'email' => 'wfernando.aguilarm@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Hm8ZZR5G7fMSfo0dTtlhKuiFQy4RPb67d41QtMeX.pbR9BCLm1WfK',
                'remember_token' => 'OrskPaESAGn94Yg7ZEUPc7Ezqxjg7B5gmqJgPseCYzKKpqw3tUKPQjcRhxXi',
                'settings' => '{"locale":"es"}',
                'created_at' => '2023-07-07 20:10:45',
                'updated_at' => '2023-12-09 21:05:50',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Dra. Cotrina',
                'email' => 'admin@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$s4b8Ijn07U5HjvxwHwMuTemS/3qgUtuHqfRBKRaHl7Hc5cZcAE4.K',
                'remember_token' => NULL,
                'settings' => '{"locale":"es"}',
                'created_at' => '2023-07-14 19:08:52',
                'updated_at' => '2023-07-17 22:06:57',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => 5,
                'name' => 'testing',
                'email' => 'mvargaskari@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3YtP9CBw7biiTPQW7IExO.ErrYFaikGxdtnZK4ob5d.t6IsuY1uk.',
                'remember_token' => NULL,
                'settings' => '{"locale":"es"}',
                'created_at' => '2023-08-26 20:55:07',
                'updated_at' => '2023-12-09 21:05:59',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'role_id' => 6,
                'name' => 'Dr Osorio',
                'email' => 'osorio123@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$BFEyvg8H3s0MbuVWbs2unu.oSz/B6nFT.T5UfOrCBrtm0ByYnYeuW',
                'remember_token' => NULL,
                'settings' => '{"locale":"es"}',
                'created_at' => '2023-11-24 19:00:12',
                'updated_at' => '2023-11-24 19:02:33',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'role_id' => 3,
                'name' => 'Enfermera Guadalupe',
                'email' => 'guadalupe33@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8ZpSWlurgR1XDb7T3ZSOn.CPsw6wvwyqpr92H8M9SxPEz2w/wpCye',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2023-11-24 19:03:28',
                'updated_at' => '2023-11-26 09:14:31',
                'deleted_at' => '2023-11-26 09:14:31',
            ),
        ));
        
        
    }
}