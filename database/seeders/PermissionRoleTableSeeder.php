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
                'permission_id' => 1,
                'role_id' => 6,
            ),
            5 => 
            array (
                'permission_id' => 1,
                'role_id' => 7,
            ),
            6 => 
            array (
                'permission_id' => 1,
                'role_id' => 8,
            ),
            7 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            8 => 
            array (
                'permission_id' => 2,
                'role_id' => 4,
            ),
            9 => 
            array (
                'permission_id' => 2,
                'role_id' => 8,
            ),
            10 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            11 => 
            array (
                'permission_id' => 3,
                'role_id' => 4,
            ),
            12 => 
            array (
                'permission_id' => 3,
                'role_id' => 8,
            ),
            13 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            14 => 
            array (
                'permission_id' => 4,
                'role_id' => 4,
            ),
            15 => 
            array (
                'permission_id' => 4,
                'role_id' => 6,
            ),
            16 => 
            array (
                'permission_id' => 4,
                'role_id' => 7,
            ),
            17 => 
            array (
                'permission_id' => 4,
                'role_id' => 8,
            ),
            18 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            19 => 
            array (
                'permission_id' => 5,
                'role_id' => 4,
            ),
            20 => 
            array (
                'permission_id' => 5,
                'role_id' => 8,
            ),
            21 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            22 => 
            array (
                'permission_id' => 6,
                'role_id' => 4,
            ),
            23 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            24 => 
            array (
                'permission_id' => 7,
                'role_id' => 4,
            ),
            25 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            26 => 
            array (
                'permission_id' => 8,
                'role_id' => 4,
            ),
            27 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            28 => 
            array (
                'permission_id' => 9,
                'role_id' => 4,
            ),
            29 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            30 => 
            array (
                'permission_id' => 10,
                'role_id' => 4,
            ),
            31 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            32 => 
            array (
                'permission_id' => 11,
                'role_id' => 4,
            ),
            33 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            34 => 
            array (
                'permission_id' => 12,
                'role_id' => 4,
            ),
            35 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            36 => 
            array (
                'permission_id' => 13,
                'role_id' => 4,
            ),
            37 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            38 => 
            array (
                'permission_id' => 14,
                'role_id' => 4,
            ),
            39 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 15,
                'role_id' => 4,
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
                'permission_id' => 16,
                'role_id' => 6,
            ),
            46 => 
            array (
                'permission_id' => 16,
                'role_id' => 7,
            ),
            47 => 
            array (
                'permission_id' => 16,
                'role_id' => 8,
            ),
            48 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            49 => 
            array (
                'permission_id' => 17,
                'role_id' => 3,
            ),
            50 => 
            array (
                'permission_id' => 17,
                'role_id' => 4,
            ),
            51 => 
            array (
                'permission_id' => 17,
                'role_id' => 6,
            ),
            52 => 
            array (
                'permission_id' => 17,
                'role_id' => 7,
            ),
            53 => 
            array (
                'permission_id' => 17,
                'role_id' => 8,
            ),
            54 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            55 => 
            array (
                'permission_id' => 18,
                'role_id' => 4,
            ),
            56 => 
            array (
                'permission_id' => 18,
                'role_id' => 7,
            ),
            57 => 
            array (
                'permission_id' => 18,
                'role_id' => 8,
            ),
            58 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            59 => 
            array (
                'permission_id' => 19,
                'role_id' => 4,
            ),
            60 => 
            array (
                'permission_id' => 19,
                'role_id' => 7,
            ),
            61 => 
            array (
                'permission_id' => 19,
                'role_id' => 8,
            ),
            62 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            63 => 
            array (
                'permission_id' => 20,
                'role_id' => 4,
            ),
            64 => 
            array (
                'permission_id' => 20,
                'role_id' => 7,
            ),
            65 => 
            array (
                'permission_id' => 20,
                'role_id' => 8,
            ),
            66 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            67 => 
            array (
                'permission_id' => 21,
                'role_id' => 4,
            ),
            68 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            69 => 
            array (
                'permission_id' => 22,
                'role_id' => 4,
            ),
            70 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            71 => 
            array (
                'permission_id' => 23,
                'role_id' => 4,
            ),
            72 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            73 => 
            array (
                'permission_id' => 24,
                'role_id' => 4,
            ),
            74 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            75 => 
            array (
                'permission_id' => 25,
                'role_id' => 4,
            ),
            76 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            77 => 
            array (
                'permission_id' => 36,
                'role_id' => 3,
            ),
            78 => 
            array (
                'permission_id' => 36,
                'role_id' => 4,
            ),
            79 => 
            array (
                'permission_id' => 36,
                'role_id' => 7,
            ),
            80 => 
            array (
                'permission_id' => 36,
                'role_id' => 8,
            ),
            81 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            82 => 
            array (
                'permission_id' => 37,
                'role_id' => 3,
            ),
            83 => 
            array (
                'permission_id' => 37,
                'role_id' => 4,
            ),
            84 => 
            array (
                'permission_id' => 37,
                'role_id' => 7,
            ),
            85 => 
            array (
                'permission_id' => 37,
                'role_id' => 8,
            ),
            86 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            87 => 
            array (
                'permission_id' => 38,
                'role_id' => 3,
            ),
            88 => 
            array (
                'permission_id' => 38,
                'role_id' => 4,
            ),
            89 => 
            array (
                'permission_id' => 38,
                'role_id' => 7,
            ),
            90 => 
            array (
                'permission_id' => 38,
                'role_id' => 8,
            ),
            91 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            92 => 
            array (
                'permission_id' => 39,
                'role_id' => 3,
            ),
            93 => 
            array (
                'permission_id' => 39,
                'role_id' => 4,
            ),
            94 => 
            array (
                'permission_id' => 39,
                'role_id' => 7,
            ),
            95 => 
            array (
                'permission_id' => 39,
                'role_id' => 8,
            ),
            96 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            97 => 
            array (
                'permission_id' => 40,
                'role_id' => 4,
            ),
            98 => 
            array (
                'permission_id' => 40,
                'role_id' => 7,
            ),
            99 => 
            array (
                'permission_id' => 40,
                'role_id' => 8,
            ),
            100 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            101 => 
            array (
                'permission_id' => 41,
                'role_id' => 3,
            ),
            102 => 
            array (
                'permission_id' => 41,
                'role_id' => 4,
            ),
            103 => 
            array (
                'permission_id' => 41,
                'role_id' => 7,
            ),
            104 => 
            array (
                'permission_id' => 41,
                'role_id' => 8,
            ),
            105 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            106 => 
            array (
                'permission_id' => 42,
                'role_id' => 3,
            ),
            107 => 
            array (
                'permission_id' => 42,
                'role_id' => 4,
            ),
            108 => 
            array (
                'permission_id' => 42,
                'role_id' => 7,
            ),
            109 => 
            array (
                'permission_id' => 42,
                'role_id' => 8,
            ),
            110 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            111 => 
            array (
                'permission_id' => 43,
                'role_id' => 3,
            ),
            112 => 
            array (
                'permission_id' => 43,
                'role_id' => 4,
            ),
            113 => 
            array (
                'permission_id' => 43,
                'role_id' => 7,
            ),
            114 => 
            array (
                'permission_id' => 43,
                'role_id' => 8,
            ),
            115 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            116 => 
            array (
                'permission_id' => 44,
                'role_id' => 3,
            ),
            117 => 
            array (
                'permission_id' => 44,
                'role_id' => 4,
            ),
            118 => 
            array (
                'permission_id' => 44,
                'role_id' => 7,
            ),
            119 => 
            array (
                'permission_id' => 44,
                'role_id' => 8,
            ),
            120 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            121 => 
            array (
                'permission_id' => 45,
                'role_id' => 4,
            ),
            122 => 
            array (
                'permission_id' => 45,
                'role_id' => 7,
            ),
            123 => 
            array (
                'permission_id' => 45,
                'role_id' => 8,
            ),
            124 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            125 => 
            array (
                'permission_id' => 46,
                'role_id' => 3,
            ),
            126 => 
            array (
                'permission_id' => 46,
                'role_id' => 4,
            ),
            127 => 
            array (
                'permission_id' => 46,
                'role_id' => 7,
            ),
            128 => 
            array (
                'permission_id' => 46,
                'role_id' => 8,
            ),
            129 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            130 => 
            array (
                'permission_id' => 47,
                'role_id' => 3,
            ),
            131 => 
            array (
                'permission_id' => 47,
                'role_id' => 4,
            ),
            132 => 
            array (
                'permission_id' => 47,
                'role_id' => 7,
            ),
            133 => 
            array (
                'permission_id' => 47,
                'role_id' => 8,
            ),
            134 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            135 => 
            array (
                'permission_id' => 48,
                'role_id' => 3,
            ),
            136 => 
            array (
                'permission_id' => 48,
                'role_id' => 4,
            ),
            137 => 
            array (
                'permission_id' => 48,
                'role_id' => 7,
            ),
            138 => 
            array (
                'permission_id' => 48,
                'role_id' => 8,
            ),
            139 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            140 => 
            array (
                'permission_id' => 49,
                'role_id' => 3,
            ),
            141 => 
            array (
                'permission_id' => 49,
                'role_id' => 4,
            ),
            142 => 
            array (
                'permission_id' => 49,
                'role_id' => 7,
            ),
            143 => 
            array (
                'permission_id' => 49,
                'role_id' => 8,
            ),
            144 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            145 => 
            array (
                'permission_id' => 50,
                'role_id' => 4,
            ),
            146 => 
            array (
                'permission_id' => 50,
                'role_id' => 7,
            ),
            147 => 
            array (
                'permission_id' => 50,
                'role_id' => 8,
            ),
            148 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            149 => 
            array (
                'permission_id' => 51,
                'role_id' => 3,
            ),
            150 => 
            array (
                'permission_id' => 51,
                'role_id' => 4,
            ),
            151 => 
            array (
                'permission_id' => 51,
                'role_id' => 5,
            ),
            152 => 
            array (
                'permission_id' => 51,
                'role_id' => 7,
            ),
            153 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            154 => 
            array (
                'permission_id' => 52,
                'role_id' => 3,
            ),
            155 => 
            array (
                'permission_id' => 52,
                'role_id' => 4,
            ),
            156 => 
            array (
                'permission_id' => 52,
                'role_id' => 5,
            ),
            157 => 
            array (
                'permission_id' => 52,
                'role_id' => 7,
            ),
            158 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            159 => 
            array (
                'permission_id' => 53,
                'role_id' => 3,
            ),
            160 => 
            array (
                'permission_id' => 53,
                'role_id' => 4,
            ),
            161 => 
            array (
                'permission_id' => 53,
                'role_id' => 5,
            ),
            162 => 
            array (
                'permission_id' => 53,
                'role_id' => 7,
            ),
            163 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            164 => 
            array (
                'permission_id' => 54,
                'role_id' => 3,
            ),
            165 => 
            array (
                'permission_id' => 54,
                'role_id' => 4,
            ),
            166 => 
            array (
                'permission_id' => 54,
                'role_id' => 5,
            ),
            167 => 
            array (
                'permission_id' => 54,
                'role_id' => 7,
            ),
            168 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            169 => 
            array (
                'permission_id' => 55,
                'role_id' => 4,
            ),
            170 => 
            array (
                'permission_id' => 55,
                'role_id' => 5,
            ),
            171 => 
            array (
                'permission_id' => 55,
                'role_id' => 7,
            ),
            172 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            173 => 
            array (
                'permission_id' => 56,
                'role_id' => 4,
            ),
            174 => 
            array (
                'permission_id' => 56,
                'role_id' => 7,
            ),
            175 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            176 => 
            array (
                'permission_id' => 57,
                'role_id' => 4,
            ),
            177 => 
            array (
                'permission_id' => 57,
                'role_id' => 7,
            ),
            178 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            179 => 
            array (
                'permission_id' => 58,
                'role_id' => 4,
            ),
            180 => 
            array (
                'permission_id' => 58,
                'role_id' => 7,
            ),
            181 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            182 => 
            array (
                'permission_id' => 59,
                'role_id' => 4,
            ),
            183 => 
            array (
                'permission_id' => 59,
                'role_id' => 7,
            ),
            184 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            185 => 
            array (
                'permission_id' => 60,
                'role_id' => 4,
            ),
            186 => 
            array (
                'permission_id' => 60,
                'role_id' => 7,
            ),
            187 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            188 => 
            array (
                'permission_id' => 61,
                'role_id' => 4,
            ),
            189 => 
            array (
                'permission_id' => 61,
                'role_id' => 7,
            ),
            190 => 
            array (
                'permission_id' => 61,
                'role_id' => 8,
            ),
            191 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            192 => 
            array (
                'permission_id' => 62,
                'role_id' => 4,
            ),
            193 => 
            array (
                'permission_id' => 62,
                'role_id' => 7,
            ),
            194 => 
            array (
                'permission_id' => 62,
                'role_id' => 8,
            ),
            195 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            196 => 
            array (
                'permission_id' => 63,
                'role_id' => 4,
            ),
            197 => 
            array (
                'permission_id' => 63,
                'role_id' => 7,
            ),
            198 => 
            array (
                'permission_id' => 63,
                'role_id' => 8,
            ),
            199 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            200 => 
            array (
                'permission_id' => 64,
                'role_id' => 4,
            ),
            201 => 
            array (
                'permission_id' => 64,
                'role_id' => 7,
            ),
            202 => 
            array (
                'permission_id' => 64,
                'role_id' => 8,
            ),
            203 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            204 => 
            array (
                'permission_id' => 65,
                'role_id' => 4,
            ),
            205 => 
            array (
                'permission_id' => 65,
                'role_id' => 7,
            ),
            206 => 
            array (
                'permission_id' => 65,
                'role_id' => 8,
            ),
            207 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            208 => 
            array (
                'permission_id' => 66,
                'role_id' => 4,
            ),
            209 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            210 => 
            array (
                'permission_id' => 67,
                'role_id' => 4,
            ),
            211 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            212 => 
            array (
                'permission_id' => 68,
                'role_id' => 4,
            ),
            213 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            214 => 
            array (
                'permission_id' => 69,
                'role_id' => 4,
            ),
            215 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            216 => 
            array (
                'permission_id' => 70,
                'role_id' => 4,
            ),
            217 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
            218 => 
            array (
                'permission_id' => 76,
                'role_id' => 4,
            ),
            219 => 
            array (
                'permission_id' => 77,
                'role_id' => 1,
            ),
            220 => 
            array (
                'permission_id' => 77,
                'role_id' => 4,
            ),
            221 => 
            array (
                'permission_id' => 78,
                'role_id' => 1,
            ),
            222 => 
            array (
                'permission_id' => 78,
                'role_id' => 4,
            ),
            223 => 
            array (
                'permission_id' => 79,
                'role_id' => 1,
            ),
            224 => 
            array (
                'permission_id' => 79,
                'role_id' => 4,
            ),
            225 => 
            array (
                'permission_id' => 80,
                'role_id' => 1,
            ),
            226 => 
            array (
                'permission_id' => 80,
                'role_id' => 4,
            ),
            227 => 
            array (
                'permission_id' => 81,
                'role_id' => 1,
            ),
            228 => 
            array (
                'permission_id' => 81,
                'role_id' => 4,
            ),
            229 => 
            array (
                'permission_id' => 82,
                'role_id' => 1,
            ),
            230 => 
            array (
                'permission_id' => 82,
                'role_id' => 4,
            ),
            231 => 
            array (
                'permission_id' => 83,
                'role_id' => 1,
            ),
            232 => 
            array (
                'permission_id' => 83,
                'role_id' => 4,
            ),
            233 => 
            array (
                'permission_id' => 84,
                'role_id' => 1,
            ),
            234 => 
            array (
                'permission_id' => 84,
                'role_id' => 4,
            ),
            235 => 
            array (
                'permission_id' => 85,
                'role_id' => 1,
            ),
            236 => 
            array (
                'permission_id' => 85,
                'role_id' => 4,
            ),
            237 => 
            array (
                'permission_id' => 86,
                'role_id' => 4,
            ),
            238 => 
            array (
                'permission_id' => 87,
                'role_id' => 4,
            ),
            239 => 
            array (
                'permission_id' => 88,
                'role_id' => 4,
            ),
            240 => 
            array (
                'permission_id' => 89,
                'role_id' => 4,
            ),
            241 => 
            array (
                'permission_id' => 90,
                'role_id' => 4,
            ),
        ));
        
        
    }
}