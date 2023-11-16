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
                'remember_token' => 'zUQTWKZzBAqMeNj7vjZRavgzpT3IQsaKAFFzFl7zQMEgkkogxGbpuXDsel2s',
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
                'remember_token' => 'E2fdbGWLJQ2t39tvfizZP3XZLJNPQQUbdEej9cVLcfLumChmzQH7KNl5nelI',
                'settings' => '{"locale":"es"}',
                'created_at' => '2023-07-07 20:10:45',
                'updated_at' => '2023-11-09 19:20:20',
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
                'password' => '$2y$10$kYGoMsa.vx.MEahHz/yoOurrqA/SGIvA1Opbxjj3wlNoqrRAAbKfS',
                'remember_token' => NULL,
                'settings' => '{"locale":"es"}',
                'created_at' => '2023-08-26 20:55:07',
                'updated_at' => '2023-09-07 21:20:56',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}