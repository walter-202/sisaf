<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permission_role')->delete();
        
        \DB::table('permission_role')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 4,
            ),
            2 => 
            array (
                'permission_id' => 2,
                'role_id' => 4,
            ),
            3 => 
            array (
                'permission_id' => 3,
                'role_id' => 4,
            ),
            4 => 
            array (
                'permission_id' => 4,
                'role_id' => 4,
            ),
            5 => 
            array (
                'permission_id' => 5,
                'role_id' => 4,
            ),
            6 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 6,
                'role_id' => 4,
            ),
            8 => 
            array (
                'permission_id' => 6,
                'role_id' => 5,
            ),
            9 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            10 => 
            array (
                'permission_id' => 7,
                'role_id' => 4,
            ),
            11 => 
            array (
                'permission_id' => 7,
                'role_id' => 5,
            ),
            12 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 8,
                'role_id' => 4,
            ),
            14 => 
            array (
                'permission_id' => 8,
                'role_id' => 5,
            ),
            15 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            16 => 
            array (
                'permission_id' => 9,
                'role_id' => 4,
            ),
            17 => 
            array (
                'permission_id' => 9,
                'role_id' => 5,
            ),
            18 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            19 => 
            array (
                'permission_id' => 10,
                'role_id' => 4,
            ),
            20 => 
            array (
                'permission_id' => 10,
                'role_id' => 5,
            ),
            21 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 11,
                'role_id' => 4,
            ),
            23 => 
            array (
                'permission_id' => 11,
                'role_id' => 5,
            ),
            24 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 12,
                'role_id' => 4,
            ),
            26 => 
            array (
                'permission_id' => 12,
                'role_id' => 5,
            ),
            27 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 13,
                'role_id' => 4,
            ),
            29 => 
            array (
                'permission_id' => 13,
                'role_id' => 5,
            ),
            30 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 14,
                'role_id' => 4,
            ),
            32 => 
            array (
                'permission_id' => 14,
                'role_id' => 5,
            ),
            33 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            34 => 
            array (
                'permission_id' => 15,
                'role_id' => 4,
            ),
            35 => 
            array (
                'permission_id' => 15,
                'role_id' => 5,
            ),
            36 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            37 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            38 => 
            array (
                'permission_id' => 16,
                'role_id' => 4,
            ),
            39 => 
            array (
                'permission_id' => 16,
                'role_id' => 5,
            ),
            40 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            41 => 
            array (
                'permission_id' => 17,
                'role_id' => 4,
            ),
            42 => 
            array (
                'permission_id' => 17,
                'role_id' => 5,
            ),
            43 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            44 => 
            array (
                'permission_id' => 18,
                'role_id' => 4,
            ),
            45 => 
            array (
                'permission_id' => 18,
                'role_id' => 5,
            ),
            46 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            47 => 
            array (
                'permission_id' => 19,
                'role_id' => 4,
            ),
            48 => 
            array (
                'permission_id' => 19,
                'role_id' => 5,
            ),
            49 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 20,
                'role_id' => 4,
            ),
            51 => 
            array (
                'permission_id' => 20,
                'role_id' => 5,
            ),
            52 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            53 => 
            array (
                'permission_id' => 21,
                'role_id' => 4,
            ),
            54 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            55 => 
            array (
                'permission_id' => 22,
                'role_id' => 4,
            ),
            56 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            57 => 
            array (
                'permission_id' => 23,
                'role_id' => 4,
            ),
            58 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            59 => 
            array (
                'permission_id' => 24,
                'role_id' => 4,
            ),
            60 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            61 => 
            array (
                'permission_id' => 25,
                'role_id' => 4,
            ),
            62 => 
            array (
                'permission_id' => 36,
                'role_id' => 3,
            ),
            63 => 
            array (
                'permission_id' => 36,
                'role_id' => 4,
            ),
            64 => 
            array (
                'permission_id' => 36,
                'role_id' => 5,
            ),
            65 => 
            array (
                'permission_id' => 37,
                'role_id' => 3,
            ),
            66 => 
            array (
                'permission_id' => 37,
                'role_id' => 4,
            ),
            67 => 
            array (
                'permission_id' => 37,
                'role_id' => 5,
            ),
            68 => 
            array (
                'permission_id' => 38,
                'role_id' => 3,
            ),
            69 => 
            array (
                'permission_id' => 38,
                'role_id' => 4,
            ),
            70 => 
            array (
                'permission_id' => 38,
                'role_id' => 5,
            ),
            71 => 
            array (
                'permission_id' => 39,
                'role_id' => 3,
            ),
            72 => 
            array (
                'permission_id' => 39,
                'role_id' => 4,
            ),
            73 => 
            array (
                'permission_id' => 39,
                'role_id' => 5,
            ),
            74 => 
            array (
                'permission_id' => 40,
                'role_id' => 3,
            ),
            75 => 
            array (
                'permission_id' => 40,
                'role_id' => 4,
            ),
            76 => 
            array (
                'permission_id' => 40,
                'role_id' => 5,
            ),
            77 => 
            array (
                'permission_id' => 41,
                'role_id' => 3,
            ),
            78 => 
            array (
                'permission_id' => 41,
                'role_id' => 4,
            ),
            79 => 
            array (
                'permission_id' => 41,
                'role_id' => 5,
            ),
            80 => 
            array (
                'permission_id' => 42,
                'role_id' => 3,
            ),
            81 => 
            array (
                'permission_id' => 42,
                'role_id' => 4,
            ),
            82 => 
            array (
                'permission_id' => 42,
                'role_id' => 5,
            ),
            83 => 
            array (
                'permission_id' => 43,
                'role_id' => 3,
            ),
            84 => 
            array (
                'permission_id' => 43,
                'role_id' => 4,
            ),
            85 => 
            array (
                'permission_id' => 43,
                'role_id' => 5,
            ),
            86 => 
            array (
                'permission_id' => 44,
                'role_id' => 3,
            ),
            87 => 
            array (
                'permission_id' => 44,
                'role_id' => 4,
            ),
            88 => 
            array (
                'permission_id' => 44,
                'role_id' => 5,
            ),
            89 => 
            array (
                'permission_id' => 45,
                'role_id' => 3,
            ),
            90 => 
            array (
                'permission_id' => 45,
                'role_id' => 4,
            ),
            91 => 
            array (
                'permission_id' => 45,
                'role_id' => 5,
            ),
            92 => 
            array (
                'permission_id' => 46,
                'role_id' => 3,
            ),
            93 => 
            array (
                'permission_id' => 46,
                'role_id' => 4,
            ),
            94 => 
            array (
                'permission_id' => 46,
                'role_id' => 5,
            ),
            95 => 
            array (
                'permission_id' => 47,
                'role_id' => 3,
            ),
            96 => 
            array (
                'permission_id' => 47,
                'role_id' => 4,
            ),
            97 => 
            array (
                'permission_id' => 47,
                'role_id' => 5,
            ),
            98 => 
            array (
                'permission_id' => 48,
                'role_id' => 3,
            ),
            99 => 
            array (
                'permission_id' => 48,
                'role_id' => 4,
            ),
            100 => 
            array (
                'permission_id' => 48,
                'role_id' => 5,
            ),
            101 => 
            array (
                'permission_id' => 49,
                'role_id' => 3,
            ),
            102 => 
            array (
                'permission_id' => 49,
                'role_id' => 4,
            ),
            103 => 
            array (
                'permission_id' => 49,
                'role_id' => 5,
            ),
            104 => 
            array (
                'permission_id' => 50,
                'role_id' => 3,
            ),
            105 => 
            array (
                'permission_id' => 50,
                'role_id' => 4,
            ),
            106 => 
            array (
                'permission_id' => 50,
                'role_id' => 5,
            ),
            107 => 
            array (
                'permission_id' => 51,
                'role_id' => 3,
            ),
            108 => 
            array (
                'permission_id' => 51,
                'role_id' => 4,
            ),
            109 => 
            array (
                'permission_id' => 51,
                'role_id' => 5,
            ),
            110 => 
            array (
                'permission_id' => 52,
                'role_id' => 3,
            ),
            111 => 
            array (
                'permission_id' => 52,
                'role_id' => 4,
            ),
            112 => 
            array (
                'permission_id' => 52,
                'role_id' => 5,
            ),
            113 => 
            array (
                'permission_id' => 53,
                'role_id' => 3,
            ),
            114 => 
            array (
                'permission_id' => 53,
                'role_id' => 4,
            ),
            115 => 
            array (
                'permission_id' => 53,
                'role_id' => 5,
            ),
            116 => 
            array (
                'permission_id' => 54,
                'role_id' => 3,
            ),
            117 => 
            array (
                'permission_id' => 54,
                'role_id' => 4,
            ),
            118 => 
            array (
                'permission_id' => 54,
                'role_id' => 5,
            ),
            119 => 
            array (
                'permission_id' => 55,
                'role_id' => 3,
            ),
            120 => 
            array (
                'permission_id' => 55,
                'role_id' => 4,
            ),
            121 => 
            array (
                'permission_id' => 55,
                'role_id' => 5,
            ),
        ));
        
        
    }
}