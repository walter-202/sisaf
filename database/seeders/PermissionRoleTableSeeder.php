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
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            2 => 
            array (
                'permission_id' => 1,
                'role_id' => 4,
            ),
            3 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            4 => 
            array (
                'permission_id' => 2,
                'role_id' => 4,
            ),
            5 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            6 => 
            array (
                'permission_id' => 3,
                'role_id' => 4,
            ),
            7 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 4,
                'role_id' => 4,
            ),
            9 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            10 => 
            array (
                'permission_id' => 5,
                'role_id' => 4,
            ),
            11 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            12 => 
            array (
                'permission_id' => 6,
                'role_id' => 4,
            ),
            13 => 
            array (
                'permission_id' => 6,
                'role_id' => 5,
            ),
            14 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            15 => 
            array (
                'permission_id' => 7,
                'role_id' => 4,
            ),
            16 => 
            array (
                'permission_id' => 7,
                'role_id' => 5,
            ),
            17 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 8,
                'role_id' => 4,
            ),
            19 => 
            array (
                'permission_id' => 8,
                'role_id' => 5,
            ),
            20 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            21 => 
            array (
                'permission_id' => 9,
                'role_id' => 4,
            ),
            22 => 
            array (
                'permission_id' => 9,
                'role_id' => 5,
            ),
            23 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            24 => 
            array (
                'permission_id' => 10,
                'role_id' => 4,
            ),
            25 => 
            array (
                'permission_id' => 10,
                'role_id' => 5,
            ),
            26 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            27 => 
            array (
                'permission_id' => 11,
                'role_id' => 4,
            ),
            28 => 
            array (
                'permission_id' => 11,
                'role_id' => 5,
            ),
            29 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 12,
                'role_id' => 4,
            ),
            31 => 
            array (
                'permission_id' => 12,
                'role_id' => 5,
            ),
            32 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            33 => 
            array (
                'permission_id' => 13,
                'role_id' => 4,
            ),
            34 => 
            array (
                'permission_id' => 13,
                'role_id' => 5,
            ),
            35 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            36 => 
            array (
                'permission_id' => 14,
                'role_id' => 4,
            ),
            37 => 
            array (
                'permission_id' => 14,
                'role_id' => 5,
            ),
            38 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            39 => 
            array (
                'permission_id' => 15,
                'role_id' => 4,
            ),
            40 => 
            array (
                'permission_id' => 15,
                'role_id' => 5,
            ),
            41 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            42 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            43 => 
            array (
                'permission_id' => 16,
                'role_id' => 4,
            ),
            44 => 
            array (
                'permission_id' => 16,
                'role_id' => 5,
            ),
            45 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            46 => 
            array (
                'permission_id' => 17,
                'role_id' => 4,
            ),
            47 => 
            array (
                'permission_id' => 17,
                'role_id' => 5,
            ),
            48 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            49 => 
            array (
                'permission_id' => 18,
                'role_id' => 4,
            ),
            50 => 
            array (
                'permission_id' => 18,
                'role_id' => 5,
            ),
            51 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            52 => 
            array (
                'permission_id' => 19,
                'role_id' => 4,
            ),
            53 => 
            array (
                'permission_id' => 19,
                'role_id' => 5,
            ),
            54 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            55 => 
            array (
                'permission_id' => 20,
                'role_id' => 4,
            ),
            56 => 
            array (
                'permission_id' => 20,
                'role_id' => 5,
            ),
            57 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            58 => 
            array (
                'permission_id' => 21,
                'role_id' => 4,
            ),
            59 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            60 => 
            array (
                'permission_id' => 22,
                'role_id' => 4,
            ),
            61 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            62 => 
            array (
                'permission_id' => 23,
                'role_id' => 4,
            ),
            63 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            64 => 
            array (
                'permission_id' => 24,
                'role_id' => 4,
            ),
            65 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            66 => 
            array (
                'permission_id' => 25,
                'role_id' => 4,
            ),
            67 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            68 => 
            array (
                'permission_id' => 36,
                'role_id' => 3,
            ),
            69 => 
            array (
                'permission_id' => 36,
                'role_id' => 4,
            ),
            70 => 
            array (
                'permission_id' => 36,
                'role_id' => 5,
            ),
            71 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            72 => 
            array (
                'permission_id' => 37,
                'role_id' => 3,
            ),
            73 => 
            array (
                'permission_id' => 37,
                'role_id' => 4,
            ),
            74 => 
            array (
                'permission_id' => 37,
                'role_id' => 5,
            ),
            75 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            76 => 
            array (
                'permission_id' => 38,
                'role_id' => 3,
            ),
            77 => 
            array (
                'permission_id' => 38,
                'role_id' => 4,
            ),
            78 => 
            array (
                'permission_id' => 38,
                'role_id' => 5,
            ),
            79 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            80 => 
            array (
                'permission_id' => 39,
                'role_id' => 3,
            ),
            81 => 
            array (
                'permission_id' => 39,
                'role_id' => 4,
            ),
            82 => 
            array (
                'permission_id' => 39,
                'role_id' => 5,
            ),
            83 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            84 => 
            array (
                'permission_id' => 40,
                'role_id' => 3,
            ),
            85 => 
            array (
                'permission_id' => 40,
                'role_id' => 4,
            ),
            86 => 
            array (
                'permission_id' => 40,
                'role_id' => 5,
            ),
            87 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            88 => 
            array (
                'permission_id' => 41,
                'role_id' => 3,
            ),
            89 => 
            array (
                'permission_id' => 41,
                'role_id' => 4,
            ),
            90 => 
            array (
                'permission_id' => 41,
                'role_id' => 5,
            ),
            91 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            92 => 
            array (
                'permission_id' => 42,
                'role_id' => 3,
            ),
            93 => 
            array (
                'permission_id' => 42,
                'role_id' => 4,
            ),
            94 => 
            array (
                'permission_id' => 42,
                'role_id' => 5,
            ),
            95 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            96 => 
            array (
                'permission_id' => 43,
                'role_id' => 3,
            ),
            97 => 
            array (
                'permission_id' => 43,
                'role_id' => 4,
            ),
            98 => 
            array (
                'permission_id' => 43,
                'role_id' => 5,
            ),
            99 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            100 => 
            array (
                'permission_id' => 44,
                'role_id' => 3,
            ),
            101 => 
            array (
                'permission_id' => 44,
                'role_id' => 4,
            ),
            102 => 
            array (
                'permission_id' => 44,
                'role_id' => 5,
            ),
            103 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            104 => 
            array (
                'permission_id' => 45,
                'role_id' => 3,
            ),
            105 => 
            array (
                'permission_id' => 45,
                'role_id' => 4,
            ),
            106 => 
            array (
                'permission_id' => 45,
                'role_id' => 5,
            ),
            107 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            108 => 
            array (
                'permission_id' => 46,
                'role_id' => 3,
            ),
            109 => 
            array (
                'permission_id' => 46,
                'role_id' => 4,
            ),
            110 => 
            array (
                'permission_id' => 46,
                'role_id' => 5,
            ),
            111 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            112 => 
            array (
                'permission_id' => 47,
                'role_id' => 3,
            ),
            113 => 
            array (
                'permission_id' => 47,
                'role_id' => 4,
            ),
            114 => 
            array (
                'permission_id' => 47,
                'role_id' => 5,
            ),
            115 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            116 => 
            array (
                'permission_id' => 48,
                'role_id' => 3,
            ),
            117 => 
            array (
                'permission_id' => 48,
                'role_id' => 4,
            ),
            118 => 
            array (
                'permission_id' => 48,
                'role_id' => 5,
            ),
            119 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            120 => 
            array (
                'permission_id' => 49,
                'role_id' => 3,
            ),
            121 => 
            array (
                'permission_id' => 49,
                'role_id' => 4,
            ),
            122 => 
            array (
                'permission_id' => 49,
                'role_id' => 5,
            ),
            123 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            124 => 
            array (
                'permission_id' => 50,
                'role_id' => 3,
            ),
            125 => 
            array (
                'permission_id' => 50,
                'role_id' => 4,
            ),
            126 => 
            array (
                'permission_id' => 50,
                'role_id' => 5,
            ),
            127 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            128 => 
            array (
                'permission_id' => 51,
                'role_id' => 3,
            ),
            129 => 
            array (
                'permission_id' => 51,
                'role_id' => 4,
            ),
            130 => 
            array (
                'permission_id' => 51,
                'role_id' => 5,
            ),
            131 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            132 => 
            array (
                'permission_id' => 52,
                'role_id' => 3,
            ),
            133 => 
            array (
                'permission_id' => 52,
                'role_id' => 4,
            ),
            134 => 
            array (
                'permission_id' => 52,
                'role_id' => 5,
            ),
            135 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            136 => 
            array (
                'permission_id' => 53,
                'role_id' => 3,
            ),
            137 => 
            array (
                'permission_id' => 53,
                'role_id' => 4,
            ),
            138 => 
            array (
                'permission_id' => 53,
                'role_id' => 5,
            ),
            139 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            140 => 
            array (
                'permission_id' => 54,
                'role_id' => 3,
            ),
            141 => 
            array (
                'permission_id' => 54,
                'role_id' => 4,
            ),
            142 => 
            array (
                'permission_id' => 54,
                'role_id' => 5,
            ),
            143 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            144 => 
            array (
                'permission_id' => 55,
                'role_id' => 3,
            ),
            145 => 
            array (
                'permission_id' => 55,
                'role_id' => 4,
            ),
            146 => 
            array (
                'permission_id' => 55,
                'role_id' => 5,
            ),
        ));
        
        
    }
}