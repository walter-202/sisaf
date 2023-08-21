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
                'permission_id' => 7,
                'role_id' => 1,
            ),
            14 => 
            array (
                'permission_id' => 7,
                'role_id' => 4,
            ),
            15 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            16 => 
            array (
                'permission_id' => 8,
                'role_id' => 4,
            ),
            17 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 9,
                'role_id' => 4,
            ),
            19 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            20 => 
            array (
                'permission_id' => 10,
                'role_id' => 4,
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
                'permission_id' => 12,
                'role_id' => 1,
            ),
            24 => 
            array (
                'permission_id' => 12,
                'role_id' => 4,
            ),
            25 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            26 => 
            array (
                'permission_id' => 13,
                'role_id' => 4,
            ),
            27 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 14,
                'role_id' => 4,
            ),
            29 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 15,
                'role_id' => 4,
            ),
            31 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            32 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            33 => 
            array (
                'permission_id' => 16,
                'role_id' => 4,
            ),
            34 => 
            array (
                'permission_id' => 16,
                'role_id' => 5,
            ),
            35 => 
            array (
                'permission_id' => 16,
                'role_id' => 6,
            ),
            36 => 
            array (
                'permission_id' => 16,
                'role_id' => 7,
            ),
            37 => 
            array (
                'permission_id' => 16,
                'role_id' => 8,
            ),
            38 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            39 => 
            array (
                'permission_id' => 17,
                'role_id' => 3,
            ),
            40 => 
            array (
                'permission_id' => 17,
                'role_id' => 4,
            ),
            41 => 
            array (
                'permission_id' => 17,
                'role_id' => 6,
            ),
            42 => 
            array (
                'permission_id' => 17,
                'role_id' => 7,
            ),
            43 => 
            array (
                'permission_id' => 17,
                'role_id' => 8,
            ),
            44 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            45 => 
            array (
                'permission_id' => 18,
                'role_id' => 4,
            ),
            46 => 
            array (
                'permission_id' => 18,
                'role_id' => 7,
            ),
            47 => 
            array (
                'permission_id' => 18,
                'role_id' => 8,
            ),
            48 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            49 => 
            array (
                'permission_id' => 19,
                'role_id' => 4,
            ),
            50 => 
            array (
                'permission_id' => 19,
                'role_id' => 7,
            ),
            51 => 
            array (
                'permission_id' => 19,
                'role_id' => 8,
            ),
            52 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            53 => 
            array (
                'permission_id' => 20,
                'role_id' => 4,
            ),
            54 => 
            array (
                'permission_id' => 20,
                'role_id' => 7,
            ),
            55 => 
            array (
                'permission_id' => 20,
                'role_id' => 8,
            ),
            56 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            57 => 
            array (
                'permission_id' => 21,
                'role_id' => 4,
            ),
            58 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            59 => 
            array (
                'permission_id' => 22,
                'role_id' => 4,
            ),
            60 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            61 => 
            array (
                'permission_id' => 23,
                'role_id' => 4,
            ),
            62 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            63 => 
            array (
                'permission_id' => 24,
                'role_id' => 4,
            ),
            64 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            65 => 
            array (
                'permission_id' => 25,
                'role_id' => 4,
            ),
            66 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            67 => 
            array (
                'permission_id' => 36,
                'role_id' => 3,
            ),
            68 => 
            array (
                'permission_id' => 36,
                'role_id' => 4,
            ),
            69 => 
            array (
                'permission_id' => 36,
                'role_id' => 7,
            ),
            70 => 
            array (
                'permission_id' => 36,
                'role_id' => 8,
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
                'role_id' => 7,
            ),
            75 => 
            array (
                'permission_id' => 37,
                'role_id' => 8,
            ),
            76 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            77 => 
            array (
                'permission_id' => 38,
                'role_id' => 3,
            ),
            78 => 
            array (
                'permission_id' => 38,
                'role_id' => 4,
            ),
            79 => 
            array (
                'permission_id' => 38,
                'role_id' => 7,
            ),
            80 => 
            array (
                'permission_id' => 38,
                'role_id' => 8,
            ),
            81 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            82 => 
            array (
                'permission_id' => 39,
                'role_id' => 3,
            ),
            83 => 
            array (
                'permission_id' => 39,
                'role_id' => 4,
            ),
            84 => 
            array (
                'permission_id' => 39,
                'role_id' => 7,
            ),
            85 => 
            array (
                'permission_id' => 39,
                'role_id' => 8,
            ),
            86 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            87 => 
            array (
                'permission_id' => 40,
                'role_id' => 4,
            ),
            88 => 
            array (
                'permission_id' => 40,
                'role_id' => 7,
            ),
            89 => 
            array (
                'permission_id' => 40,
                'role_id' => 8,
            ),
            90 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            91 => 
            array (
                'permission_id' => 41,
                'role_id' => 3,
            ),
            92 => 
            array (
                'permission_id' => 41,
                'role_id' => 4,
            ),
            93 => 
            array (
                'permission_id' => 41,
                'role_id' => 7,
            ),
            94 => 
            array (
                'permission_id' => 41,
                'role_id' => 8,
            ),
            95 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            96 => 
            array (
                'permission_id' => 42,
                'role_id' => 3,
            ),
            97 => 
            array (
                'permission_id' => 42,
                'role_id' => 4,
            ),
            98 => 
            array (
                'permission_id' => 42,
                'role_id' => 7,
            ),
            99 => 
            array (
                'permission_id' => 42,
                'role_id' => 8,
            ),
            100 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            101 => 
            array (
                'permission_id' => 43,
                'role_id' => 3,
            ),
            102 => 
            array (
                'permission_id' => 43,
                'role_id' => 4,
            ),
            103 => 
            array (
                'permission_id' => 43,
                'role_id' => 7,
            ),
            104 => 
            array (
                'permission_id' => 43,
                'role_id' => 8,
            ),
            105 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            106 => 
            array (
                'permission_id' => 44,
                'role_id' => 3,
            ),
            107 => 
            array (
                'permission_id' => 44,
                'role_id' => 4,
            ),
            108 => 
            array (
                'permission_id' => 44,
                'role_id' => 7,
            ),
            109 => 
            array (
                'permission_id' => 44,
                'role_id' => 8,
            ),
            110 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            111 => 
            array (
                'permission_id' => 45,
                'role_id' => 4,
            ),
            112 => 
            array (
                'permission_id' => 45,
                'role_id' => 7,
            ),
            113 => 
            array (
                'permission_id' => 45,
                'role_id' => 8,
            ),
            114 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            115 => 
            array (
                'permission_id' => 46,
                'role_id' => 3,
            ),
            116 => 
            array (
                'permission_id' => 46,
                'role_id' => 4,
            ),
            117 => 
            array (
                'permission_id' => 46,
                'role_id' => 7,
            ),
            118 => 
            array (
                'permission_id' => 46,
                'role_id' => 8,
            ),
            119 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            120 => 
            array (
                'permission_id' => 47,
                'role_id' => 3,
            ),
            121 => 
            array (
                'permission_id' => 47,
                'role_id' => 4,
            ),
            122 => 
            array (
                'permission_id' => 47,
                'role_id' => 7,
            ),
            123 => 
            array (
                'permission_id' => 47,
                'role_id' => 8,
            ),
            124 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            125 => 
            array (
                'permission_id' => 48,
                'role_id' => 3,
            ),
            126 => 
            array (
                'permission_id' => 48,
                'role_id' => 4,
            ),
            127 => 
            array (
                'permission_id' => 48,
                'role_id' => 7,
            ),
            128 => 
            array (
                'permission_id' => 48,
                'role_id' => 8,
            ),
            129 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            130 => 
            array (
                'permission_id' => 49,
                'role_id' => 3,
            ),
            131 => 
            array (
                'permission_id' => 49,
                'role_id' => 4,
            ),
            132 => 
            array (
                'permission_id' => 49,
                'role_id' => 7,
            ),
            133 => 
            array (
                'permission_id' => 49,
                'role_id' => 8,
            ),
            134 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            135 => 
            array (
                'permission_id' => 50,
                'role_id' => 4,
            ),
            136 => 
            array (
                'permission_id' => 50,
                'role_id' => 7,
            ),
            137 => 
            array (
                'permission_id' => 50,
                'role_id' => 8,
            ),
            138 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            139 => 
            array (
                'permission_id' => 51,
                'role_id' => 3,
            ),
            140 => 
            array (
                'permission_id' => 51,
                'role_id' => 4,
            ),
            141 => 
            array (
                'permission_id' => 51,
                'role_id' => 5,
            ),
            142 => 
            array (
                'permission_id' => 51,
                'role_id' => 7,
            ),
            143 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            144 => 
            array (
                'permission_id' => 52,
                'role_id' => 3,
            ),
            145 => 
            array (
                'permission_id' => 52,
                'role_id' => 4,
            ),
            146 => 
            array (
                'permission_id' => 52,
                'role_id' => 5,
            ),
            147 => 
            array (
                'permission_id' => 52,
                'role_id' => 7,
            ),
            148 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            149 => 
            array (
                'permission_id' => 53,
                'role_id' => 3,
            ),
            150 => 
            array (
                'permission_id' => 53,
                'role_id' => 4,
            ),
            151 => 
            array (
                'permission_id' => 53,
                'role_id' => 5,
            ),
            152 => 
            array (
                'permission_id' => 53,
                'role_id' => 7,
            ),
            153 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            154 => 
            array (
                'permission_id' => 54,
                'role_id' => 3,
            ),
            155 => 
            array (
                'permission_id' => 54,
                'role_id' => 4,
            ),
            156 => 
            array (
                'permission_id' => 54,
                'role_id' => 5,
            ),
            157 => 
            array (
                'permission_id' => 54,
                'role_id' => 7,
            ),
            158 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            159 => 
            array (
                'permission_id' => 55,
                'role_id' => 4,
            ),
            160 => 
            array (
                'permission_id' => 55,
                'role_id' => 5,
            ),
            161 => 
            array (
                'permission_id' => 55,
                'role_id' => 7,
            ),
            162 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            163 => 
            array (
                'permission_id' => 56,
                'role_id' => 4,
            ),
            164 => 
            array (
                'permission_id' => 56,
                'role_id' => 7,
            ),
            165 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            166 => 
            array (
                'permission_id' => 57,
                'role_id' => 4,
            ),
            167 => 
            array (
                'permission_id' => 57,
                'role_id' => 7,
            ),
            168 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            169 => 
            array (
                'permission_id' => 58,
                'role_id' => 4,
            ),
            170 => 
            array (
                'permission_id' => 58,
                'role_id' => 7,
            ),
            171 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            172 => 
            array (
                'permission_id' => 59,
                'role_id' => 4,
            ),
            173 => 
            array (
                'permission_id' => 59,
                'role_id' => 7,
            ),
            174 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            175 => 
            array (
                'permission_id' => 60,
                'role_id' => 4,
            ),
            176 => 
            array (
                'permission_id' => 60,
                'role_id' => 7,
            ),
            177 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            178 => 
            array (
                'permission_id' => 61,
                'role_id' => 4,
            ),
            179 => 
            array (
                'permission_id' => 61,
                'role_id' => 7,
            ),
            180 => 
            array (
                'permission_id' => 61,
                'role_id' => 8,
            ),
            181 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            182 => 
            array (
                'permission_id' => 62,
                'role_id' => 4,
            ),
            183 => 
            array (
                'permission_id' => 62,
                'role_id' => 7,
            ),
            184 => 
            array (
                'permission_id' => 62,
                'role_id' => 8,
            ),
            185 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            186 => 
            array (
                'permission_id' => 63,
                'role_id' => 4,
            ),
            187 => 
            array (
                'permission_id' => 63,
                'role_id' => 7,
            ),
            188 => 
            array (
                'permission_id' => 63,
                'role_id' => 8,
            ),
            189 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            190 => 
            array (
                'permission_id' => 64,
                'role_id' => 4,
            ),
            191 => 
            array (
                'permission_id' => 64,
                'role_id' => 7,
            ),
            192 => 
            array (
                'permission_id' => 64,
                'role_id' => 8,
            ),
            193 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            194 => 
            array (
                'permission_id' => 65,
                'role_id' => 4,
            ),
            195 => 
            array (
                'permission_id' => 65,
                'role_id' => 7,
            ),
            196 => 
            array (
                'permission_id' => 65,
                'role_id' => 8,
            ),
            197 => 
            array (
                'permission_id' => 66,
                'role_id' => 4,
            ),
            198 => 
            array (
                'permission_id' => 67,
                'role_id' => 4,
            ),
            199 => 
            array (
                'permission_id' => 68,
                'role_id' => 4,
            ),
            200 => 
            array (
                'permission_id' => 69,
                'role_id' => 4,
            ),
            201 => 
            array (
                'permission_id' => 70,
                'role_id' => 4,
            ),
        ));
        
        
    }
}