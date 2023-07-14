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
                'role_id' => 1,
                'name' => 'Dr. Alanes',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$diTIDr8EfGiyocGfjCcTXuRn8rQmlMdIMLyp/bHdG3CJfsAFO/olm',
                'remember_token' => 'staSfYdcCWLHTUMgV2BCPe5YBX1hTpqhxAVHE8v9Q1QNb1HWQVeg7FDJL06y',
                'settings' => '{"locale":"es"}',
                'created_at' => '2023-07-07 02:43:33',
                'updated_at' => '2023-07-14 19:08:11',
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
                'remember_token' => 'aYrVpeOEGwSterJODTgHzV0gulgBWdJSy6H398DPhRImps2VW7trTQUL6hI1',
                'settings' => '{"locale":"es"}',
                'created_at' => '2023-07-07 20:10:45',
                'updated_at' => '2023-07-07 20:10:45',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 3,
                'name' => 'Dra Cotrina',
                'email' => 'admin@gmail.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$s4b8Ijn07U5HjvxwHwMuTemS/3qgUtuHqfRBKRaHl7Hc5cZcAE4.K',
                'remember_token' => NULL,
                'settings' => '{"locale":"es"}',
                'created_at' => '2023-07-14 19:08:52',
                'updated_at' => '2023-07-14 19:08:52',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}