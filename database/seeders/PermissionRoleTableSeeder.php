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
                'permission_id' => 1,
                'role_id' => 5,
            ),
            4 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            5 => 
            array (
                'permission_id' => 2,
                'role_id' => 4,
            ),
            6 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            7 => 
            array (
                'permission_id' => 3,
                'role_id' => 4,
            ),
            8 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            9 => 
            array (
                'permission_id' => 4,
                'role_id' => 4,
            ),
            10 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            11 => 
            array (
                'permission_id' => 5,
                'role_id' => 4,
            ),
            12 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            13 => 
            array (
                'permission_id' => 6,
                'role_id' => 4,
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
                'permission_id' => 8,
                'role_id' => 1,
            ),
            17 => 
            array (
                'permission_id' => 8,
                'role_id' => 4,
            ),
            18 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            19 => 
            array (
                'permission_id' => 9,
                'role_id' => 4,
            ),
            20 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            21 => 
            array (
                'permission_id' => 10,
                'role_id' => 4,
            ),
            22 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            23 => 
            array (
                'permission_id' => 11,
                'role_id' => 4,
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
                'permission_id' => 13,
                'role_id' => 1,
            ),
            27 => 
            array (
                'permission_id' => 13,
                'role_id' => 4,
            ),
            28 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            29 => 
            array (
                'permission_id' => 14,
                'role_id' => 4,
            ),
            30 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 15,
                'role_id' => 4,
            ),
            32 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            33 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            34 => 
            array (
                'permission_id' => 16,
                'role_id' => 4,
            ),
            35 => 
            array (
                'permission_id' => 16,
                'role_id' => 5,
            ),
            36 => 
            array (
                'permission_id' => 16,
                'role_id' => 6,
            ),
            37 => 
            array (
                'permission_id' => 16,
                'role_id' => 7,
            ),
            38 => 
            array (
                'permission_id' => 16,
                'role_id' => 8,
            ),
            39 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 17,
                'role_id' => 3,
            ),
            41 => 
            array (
                'permission_id' => 17,
                'role_id' => 4,
            ),
            42 => 
            array (
                'permission_id' => 17,
                'role_id' => 6,
            ),
            43 => 
            array (
                'permission_id' => 17,
                'role_id' => 7,
            ),
            44 => 
            array (
                'permission_id' => 17,
                'role_id' => 8,
            ),
            45 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            46 => 
            array (
                'permission_id' => 18,
                'role_id' => 4,
            ),
            47 => 
            array (
                'permission_id' => 18,
                'role_id' => 7,
            ),
            48 => 
            array (
                'permission_id' => 18,
                'role_id' => 8,
            ),
            49 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            50 => 
            array (
                'permission_id' => 19,
                'role_id' => 4,
            ),
            51 => 
            array (
                'permission_id' => 19,
                'role_id' => 7,
            ),
            52 => 
            array (
                'permission_id' => 19,
                'role_id' => 8,
            ),
            53 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            54 => 
            array (
                'permission_id' => 20,
                'role_id' => 4,
            ),
            55 => 
            array (
                'permission_id' => 20,
                'role_id' => 7,
            ),
            56 => 
            array (
                'permission_id' => 20,
                'role_id' => 8,
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
                'role_id' => 7,
            ),
            71 => 
            array (
                'permission_id' => 36,
                'role_id' => 8,
            ),
            72 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            73 => 
            array (
                'permission_id' => 37,
                'role_id' => 3,
            ),
            74 => 
            array (
                'permission_id' => 37,
                'role_id' => 4,
            ),
            75 => 
            array (
                'permission_id' => 37,
                'role_id' => 7,
            ),
            76 => 
            array (
                'permission_id' => 37,
                'role_id' => 8,
            ),
            77 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            78 => 
            array (
                'permission_id' => 38,
                'role_id' => 3,
            ),
            79 => 
            array (
                'permission_id' => 38,
                'role_id' => 4,
            ),
            80 => 
            array (
                'permission_id' => 38,
                'role_id' => 7,
            ),
            81 => 
            array (
                'permission_id' => 38,
                'role_id' => 8,
            ),
            82 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            83 => 
            array (
                'permission_id' => 39,
                'role_id' => 3,
            ),
            84 => 
            array (
                'permission_id' => 39,
                'role_id' => 4,
            ),
            85 => 
            array (
                'permission_id' => 39,
                'role_id' => 7,
            ),
            86 => 
            array (
                'permission_id' => 39,
                'role_id' => 8,
            ),
            87 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            88 => 
            array (
                'permission_id' => 40,
                'role_id' => 4,
            ),
            89 => 
            array (
                'permission_id' => 40,
                'role_id' => 7,
            ),
            90 => 
            array (
                'permission_id' => 40,
                'role_id' => 8,
            ),
            91 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            92 => 
            array (
                'permission_id' => 41,
                'role_id' => 3,
            ),
            93 => 
            array (
                'permission_id' => 41,
                'role_id' => 4,
            ),
            94 => 
            array (
                'permission_id' => 41,
                'role_id' => 7,
            ),
            95 => 
            array (
                'permission_id' => 41,
                'role_id' => 8,
            ),
            96 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            97 => 
            array (
                'permission_id' => 42,
                'role_id' => 3,
            ),
            98 => 
            array (
                'permission_id' => 42,
                'role_id' => 4,
            ),
            99 => 
            array (
                'permission_id' => 42,
                'role_id' => 7,
            ),
            100 => 
            array (
                'permission_id' => 42,
                'role_id' => 8,
            ),
            101 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            102 => 
            array (
                'permission_id' => 43,
                'role_id' => 3,
            ),
            103 => 
            array (
                'permission_id' => 43,
                'role_id' => 4,
            ),
            104 => 
            array (
                'permission_id' => 43,
                'role_id' => 7,
            ),
            105 => 
            array (
                'permission_id' => 43,
                'role_id' => 8,
            ),
            106 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            107 => 
            array (
                'permission_id' => 44,
                'role_id' => 3,
            ),
            108 => 
            array (
                'permission_id' => 44,
                'role_id' => 4,
            ),
            109 => 
            array (
                'permission_id' => 44,
                'role_id' => 7,
            ),
            110 => 
            array (
                'permission_id' => 44,
                'role_id' => 8,
            ),
            111 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            112 => 
            array (
                'permission_id' => 45,
                'role_id' => 4,
            ),
            113 => 
            array (
                'permission_id' => 45,
                'role_id' => 7,
            ),
            114 => 
            array (
                'permission_id' => 45,
                'role_id' => 8,
            ),
            115 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            116 => 
            array (
                'permission_id' => 46,
                'role_id' => 3,
            ),
            117 => 
            array (
                'permission_id' => 46,
                'role_id' => 4,
            ),
            118 => 
            array (
                'permission_id' => 46,
                'role_id' => 7,
            ),
            119 => 
            array (
                'permission_id' => 46,
                'role_id' => 8,
            ),
            120 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            121 => 
            array (
                'permission_id' => 47,
                'role_id' => 3,
            ),
            122 => 
            array (
                'permission_id' => 47,
                'role_id' => 4,
            ),
            123 => 
            array (
                'permission_id' => 47,
                'role_id' => 7,
            ),
            124 => 
            array (
                'permission_id' => 47,
                'role_id' => 8,
            ),
            125 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            126 => 
            array (
                'permission_id' => 48,
                'role_id' => 3,
            ),
            127 => 
            array (
                'permission_id' => 48,
                'role_id' => 4,
            ),
            128 => 
            array (
                'permission_id' => 48,
                'role_id' => 7,
            ),
            129 => 
            array (
                'permission_id' => 48,
                'role_id' => 8,
            ),
            130 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            131 => 
            array (
                'permission_id' => 49,
                'role_id' => 3,
            ),
            132 => 
            array (
                'permission_id' => 49,
                'role_id' => 4,
            ),
            133 => 
            array (
                'permission_id' => 49,
                'role_id' => 7,
            ),
            134 => 
            array (
                'permission_id' => 49,
                'role_id' => 8,
            ),
            135 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            136 => 
            array (
                'permission_id' => 50,
                'role_id' => 4,
            ),
            137 => 
            array (
                'permission_id' => 50,
                'role_id' => 7,
            ),
            138 => 
            array (
                'permission_id' => 50,
                'role_id' => 8,
            ),
            139 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            140 => 
            array (
                'permission_id' => 51,
                'role_id' => 3,
            ),
            141 => 
            array (
                'permission_id' => 51,
                'role_id' => 4,
            ),
            142 => 
            array (
                'permission_id' => 51,
                'role_id' => 5,
            ),
            143 => 
            array (
                'permission_id' => 51,
                'role_id' => 7,
            ),
            144 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            145 => 
            array (
                'permission_id' => 52,
                'role_id' => 3,
            ),
            146 => 
            array (
                'permission_id' => 52,
                'role_id' => 4,
            ),
            147 => 
            array (
                'permission_id' => 52,
                'role_id' => 5,
            ),
            148 => 
            array (
                'permission_id' => 52,
                'role_id' => 7,
            ),
            149 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            150 => 
            array (
                'permission_id' => 53,
                'role_id' => 3,
            ),
            151 => 
            array (
                'permission_id' => 53,
                'role_id' => 4,
            ),
            152 => 
            array (
                'permission_id' => 53,
                'role_id' => 5,
            ),
            153 => 
            array (
                'permission_id' => 53,
                'role_id' => 7,
            ),
            154 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            155 => 
            array (
                'permission_id' => 54,
                'role_id' => 3,
            ),
            156 => 
            array (
                'permission_id' => 54,
                'role_id' => 4,
            ),
            157 => 
            array (
                'permission_id' => 54,
                'role_id' => 5,
            ),
            158 => 
            array (
                'permission_id' => 54,
                'role_id' => 7,
            ),
            159 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            160 => 
            array (
                'permission_id' => 55,
                'role_id' => 4,
            ),
            161 => 
            array (
                'permission_id' => 55,
                'role_id' => 5,
            ),
            162 => 
            array (
                'permission_id' => 55,
                'role_id' => 7,
            ),
            163 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            164 => 
            array (
                'permission_id' => 56,
                'role_id' => 4,
            ),
            165 => 
            array (
                'permission_id' => 56,
                'role_id' => 7,
            ),
            166 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            167 => 
            array (
                'permission_id' => 57,
                'role_id' => 4,
            ),
            168 => 
            array (
                'permission_id' => 57,
                'role_id' => 7,
            ),
            169 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            170 => 
            array (
                'permission_id' => 58,
                'role_id' => 4,
            ),
            171 => 
            array (
                'permission_id' => 58,
                'role_id' => 7,
            ),
            172 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            173 => 
            array (
                'permission_id' => 59,
                'role_id' => 4,
            ),
            174 => 
            array (
                'permission_id' => 59,
                'role_id' => 7,
            ),
            175 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            176 => 
            array (
                'permission_id' => 60,
                'role_id' => 4,
            ),
            177 => 
            array (
                'permission_id' => 60,
                'role_id' => 7,
            ),
            178 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            179 => 
            array (
                'permission_id' => 61,
                'role_id' => 4,
            ),
            180 => 
            array (
                'permission_id' => 61,
                'role_id' => 7,
            ),
            181 => 
            array (
                'permission_id' => 61,
                'role_id' => 8,
            ),
            182 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            183 => 
            array (
                'permission_id' => 62,
                'role_id' => 4,
            ),
            184 => 
            array (
                'permission_id' => 62,
                'role_id' => 7,
            ),
            185 => 
            array (
                'permission_id' => 62,
                'role_id' => 8,
            ),
            186 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            187 => 
            array (
                'permission_id' => 63,
                'role_id' => 4,
            ),
            188 => 
            array (
                'permission_id' => 63,
                'role_id' => 7,
            ),
            189 => 
            array (
                'permission_id' => 63,
                'role_id' => 8,
            ),
            190 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            191 => 
            array (
                'permission_id' => 64,
                'role_id' => 4,
            ),
            192 => 
            array (
                'permission_id' => 64,
                'role_id' => 7,
            ),
            193 => 
            array (
                'permission_id' => 64,
                'role_id' => 8,
            ),
            194 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            195 => 
            array (
                'permission_id' => 65,
                'role_id' => 4,
            ),
            196 => 
            array (
                'permission_id' => 65,
                'role_id' => 7,
            ),
            197 => 
            array (
                'permission_id' => 65,
                'role_id' => 8,
            ),
            198 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            199 => 
            array (
                'permission_id' => 66,
                'role_id' => 4,
            ),
            200 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            201 => 
            array (
                'permission_id' => 67,
                'role_id' => 4,
            ),
            202 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            203 => 
            array (
                'permission_id' => 68,
                'role_id' => 4,
            ),
            204 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            205 => 
            array (
                'permission_id' => 69,
                'role_id' => 4,
            ),
            206 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            207 => 
            array (
                'permission_id' => 70,
                'role_id' => 4,
            ),
            208 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
            209 => 
            array (
                'permission_id' => 76,
                'role_id' => 4,
            ),
            210 => 
            array (
                'permission_id' => 77,
                'role_id' => 1,
            ),
            211 => 
            array (
                'permission_id' => 77,
                'role_id' => 4,
            ),
            212 => 
            array (
                'permission_id' => 78,
                'role_id' => 1,
            ),
            213 => 
            array (
                'permission_id' => 78,
                'role_id' => 4,
            ),
            214 => 
            array (
                'permission_id' => 79,
                'role_id' => 1,
            ),
            215 => 
            array (
                'permission_id' => 79,
                'role_id' => 4,
            ),
            216 => 
            array (
                'permission_id' => 80,
                'role_id' => 1,
            ),
            217 => 
            array (
                'permission_id' => 80,
                'role_id' => 4,
            ),
            218 => 
            array (
                'permission_id' => 81,
                'role_id' => 1,
            ),
            219 => 
            array (
                'permission_id' => 81,
                'role_id' => 4,
            ),
            220 => 
            array (
                'permission_id' => 82,
                'role_id' => 1,
            ),
            221 => 
            array (
                'permission_id' => 82,
                'role_id' => 4,
            ),
            222 => 
            array (
                'permission_id' => 83,
                'role_id' => 1,
            ),
            223 => 
            array (
                'permission_id' => 83,
                'role_id' => 4,
            ),
            224 => 
            array (
                'permission_id' => 84,
                'role_id' => 1,
            ),
            225 => 
            array (
                'permission_id' => 84,
                'role_id' => 4,
            ),
            226 => 
            array (
                'permission_id' => 85,
                'role_id' => 1,
            ),
            227 => 
            array (
                'permission_id' => 85,
                'role_id' => 4,
            ),
        ));
        
        
    }
}