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
                'remember_token' => 'oR103MbkbyaTx94sYq1dELN2TMhWTmpwAJO5eBujB9073nEzoWDHPFteFbI8',
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
                'remember_token' => 'rDHnXPoSXiz7ZWxfieyNOIybiGphTDh85AUAAMRycRuqpOP2cvOqR4VrZm02',
                'role_id' => 4,
                'settings' => '{"locale":"es"}',
                'updated_at' => '2023-07-07 20:10:45',
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
        ));
        
        
    }
}