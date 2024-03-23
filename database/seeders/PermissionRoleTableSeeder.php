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
                'role_id' => 8,
            ),
            17 => 
            array (
                'permission_id' => 5,
                'role_id' => 1,
            ),
            18 => 
            array (
                'permission_id' => 5,
                'role_id' => 4,
            ),
            19 => 
            array (
                'permission_id' => 5,
                'role_id' => 8,
            ),
            20 => 
            array (
                'permission_id' => 6,
                'role_id' => 1,
            ),
            21 => 
            array (
                'permission_id' => 6,
                'role_id' => 4,
            ),
            22 => 
            array (
                'permission_id' => 7,
                'role_id' => 1,
            ),
            23 => 
            array (
                'permission_id' => 7,
                'role_id' => 4,
            ),
            24 => 
            array (
                'permission_id' => 8,
                'role_id' => 1,
            ),
            25 => 
            array (
                'permission_id' => 8,
                'role_id' => 4,
            ),
            26 => 
            array (
                'permission_id' => 9,
                'role_id' => 1,
            ),
            27 => 
            array (
                'permission_id' => 9,
                'role_id' => 4,
            ),
            28 => 
            array (
                'permission_id' => 10,
                'role_id' => 1,
            ),
            29 => 
            array (
                'permission_id' => 10,
                'role_id' => 4,
            ),
            30 => 
            array (
                'permission_id' => 11,
                'role_id' => 1,
            ),
            31 => 
            array (
                'permission_id' => 11,
                'role_id' => 4,
            ),
            32 => 
            array (
                'permission_id' => 11,
                'role_id' => 7,
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
                'permission_id' => 12,
                'role_id' => 7,
            ),
            36 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            37 => 
            array (
                'permission_id' => 13,
                'role_id' => 4,
            ),
            38 => 
            array (
                'permission_id' => 13,
                'role_id' => 7,
            ),
            39 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            40 => 
            array (
                'permission_id' => 14,
                'role_id' => 4,
            ),
            41 => 
            array (
                'permission_id' => 14,
                'role_id' => 7,
            ),
            42 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            43 => 
            array (
                'permission_id' => 15,
                'role_id' => 4,
            ),
            44 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            45 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            46 => 
            array (
                'permission_id' => 16,
                'role_id' => 4,
            ),
            47 => 
            array (
                'permission_id' => 16,
                'role_id' => 5,
            ),
            48 => 
            array (
                'permission_id' => 16,
                'role_id' => 6,
            ),
            49 => 
            array (
                'permission_id' => 16,
                'role_id' => 7,
            ),
            50 => 
            array (
                'permission_id' => 16,
                'role_id' => 8,
            ),
            51 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            52 => 
            array (
                'permission_id' => 17,
                'role_id' => 3,
            ),
            53 => 
            array (
                'permission_id' => 17,
                'role_id' => 4,
            ),
            54 => 
            array (
                'permission_id' => 17,
                'role_id' => 6,
            ),
            55 => 
            array (
                'permission_id' => 17,
                'role_id' => 7,
            ),
            56 => 
            array (
                'permission_id' => 17,
                'role_id' => 8,
            ),
            57 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            58 => 
            array (
                'permission_id' => 18,
                'role_id' => 4,
            ),
            59 => 
            array (
                'permission_id' => 18,
                'role_id' => 7,
            ),
            60 => 
            array (
                'permission_id' => 18,
                'role_id' => 8,
            ),
            61 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            62 => 
            array (
                'permission_id' => 19,
                'role_id' => 4,
            ),
            63 => 
            array (
                'permission_id' => 19,
                'role_id' => 7,
            ),
            64 => 
            array (
                'permission_id' => 19,
                'role_id' => 8,
            ),
            65 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            66 => 
            array (
                'permission_id' => 20,
                'role_id' => 4,
            ),
            67 => 
            array (
                'permission_id' => 20,
                'role_id' => 7,
            ),
            68 => 
            array (
                'permission_id' => 20,
                'role_id' => 8,
            ),
            69 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            70 => 
            array (
                'permission_id' => 21,
                'role_id' => 4,
            ),
            71 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            72 => 
            array (
                'permission_id' => 22,
                'role_id' => 4,
            ),
            73 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            74 => 
            array (
                'permission_id' => 23,
                'role_id' => 4,
            ),
            75 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            76 => 
            array (
                'permission_id' => 24,
                'role_id' => 4,
            ),
            77 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            78 => 
            array (
                'permission_id' => 25,
                'role_id' => 4,
            ),
            79 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            80 => 
            array (
                'permission_id' => 36,
                'role_id' => 3,
            ),
            81 => 
            array (
                'permission_id' => 36,
                'role_id' => 4,
            ),
            82 => 
            array (
                'permission_id' => 36,
                'role_id' => 7,
            ),
            83 => 
            array (
                'permission_id' => 36,
                'role_id' => 8,
            ),
            84 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            85 => 
            array (
                'permission_id' => 37,
                'role_id' => 3,
            ),
            86 => 
            array (
                'permission_id' => 37,
                'role_id' => 4,
            ),
            87 => 
            array (
                'permission_id' => 37,
                'role_id' => 7,
            ),
            88 => 
            array (
                'permission_id' => 37,
                'role_id' => 8,
            ),
            89 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            90 => 
            array (
                'permission_id' => 38,
                'role_id' => 3,
            ),
            91 => 
            array (
                'permission_id' => 38,
                'role_id' => 4,
            ),
            92 => 
            array (
                'permission_id' => 38,
                'role_id' => 7,
            ),
            93 => 
            array (
                'permission_id' => 38,
                'role_id' => 8,
            ),
            94 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            95 => 
            array (
                'permission_id' => 39,
                'role_id' => 3,
            ),
            96 => 
            array (
                'permission_id' => 39,
                'role_id' => 4,
            ),
            97 => 
            array (
                'permission_id' => 39,
                'role_id' => 7,
            ),
            98 => 
            array (
                'permission_id' => 39,
                'role_id' => 8,
            ),
            99 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            100 => 
            array (
                'permission_id' => 40,
                'role_id' => 4,
            ),
            101 => 
            array (
                'permission_id' => 40,
                'role_id' => 7,
            ),
            102 => 
            array (
                'permission_id' => 40,
                'role_id' => 8,
            ),
            103 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            104 => 
            array (
                'permission_id' => 41,
                'role_id' => 3,
            ),
            105 => 
            array (
                'permission_id' => 41,
                'role_id' => 4,
            ),
            106 => 
            array (
                'permission_id' => 41,
                'role_id' => 7,
            ),
            107 => 
            array (
                'permission_id' => 41,
                'role_id' => 8,
            ),
            108 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            109 => 
            array (
                'permission_id' => 42,
                'role_id' => 3,
            ),
            110 => 
            array (
                'permission_id' => 42,
                'role_id' => 4,
            ),
            111 => 
            array (
                'permission_id' => 42,
                'role_id' => 7,
            ),
            112 => 
            array (
                'permission_id' => 42,
                'role_id' => 8,
            ),
            113 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            114 => 
            array (
                'permission_id' => 43,
                'role_id' => 3,
            ),
            115 => 
            array (
                'permission_id' => 43,
                'role_id' => 4,
            ),
            116 => 
            array (
                'permission_id' => 43,
                'role_id' => 7,
            ),
            117 => 
            array (
                'permission_id' => 43,
                'role_id' => 8,
            ),
            118 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            119 => 
            array (
                'permission_id' => 44,
                'role_id' => 3,
            ),
            120 => 
            array (
                'permission_id' => 44,
                'role_id' => 4,
            ),
            121 => 
            array (
                'permission_id' => 44,
                'role_id' => 7,
            ),
            122 => 
            array (
                'permission_id' => 44,
                'role_id' => 8,
            ),
            123 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            124 => 
            array (
                'permission_id' => 45,
                'role_id' => 4,
            ),
            125 => 
            array (
                'permission_id' => 45,
                'role_id' => 7,
            ),
            126 => 
            array (
                'permission_id' => 45,
                'role_id' => 8,
            ),
            127 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            128 => 
            array (
                'permission_id' => 46,
                'role_id' => 3,
            ),
            129 => 
            array (
                'permission_id' => 46,
                'role_id' => 4,
            ),
            130 => 
            array (
                'permission_id' => 46,
                'role_id' => 7,
            ),
            131 => 
            array (
                'permission_id' => 46,
                'role_id' => 8,
            ),
            132 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            133 => 
            array (
                'permission_id' => 47,
                'role_id' => 3,
            ),
            134 => 
            array (
                'permission_id' => 47,
                'role_id' => 4,
            ),
            135 => 
            array (
                'permission_id' => 47,
                'role_id' => 7,
            ),
            136 => 
            array (
                'permission_id' => 47,
                'role_id' => 8,
            ),
            137 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            138 => 
            array (
                'permission_id' => 48,
                'role_id' => 3,
            ),
            139 => 
            array (
                'permission_id' => 48,
                'role_id' => 4,
            ),
            140 => 
            array (
                'permission_id' => 48,
                'role_id' => 7,
            ),
            141 => 
            array (
                'permission_id' => 48,
                'role_id' => 8,
            ),
            142 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            143 => 
            array (
                'permission_id' => 49,
                'role_id' => 3,
            ),
            144 => 
            array (
                'permission_id' => 49,
                'role_id' => 4,
            ),
            145 => 
            array (
                'permission_id' => 49,
                'role_id' => 7,
            ),
            146 => 
            array (
                'permission_id' => 49,
                'role_id' => 8,
            ),
            147 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            148 => 
            array (
                'permission_id' => 50,
                'role_id' => 4,
            ),
            149 => 
            array (
                'permission_id' => 50,
                'role_id' => 7,
            ),
            150 => 
            array (
                'permission_id' => 50,
                'role_id' => 8,
            ),
            151 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            152 => 
            array (
                'permission_id' => 51,
                'role_id' => 3,
            ),
            153 => 
            array (
                'permission_id' => 51,
                'role_id' => 4,
            ),
            154 => 
            array (
                'permission_id' => 51,
                'role_id' => 5,
            ),
            155 => 
            array (
                'permission_id' => 51,
                'role_id' => 7,
            ),
            156 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            157 => 
            array (
                'permission_id' => 52,
                'role_id' => 3,
            ),
            158 => 
            array (
                'permission_id' => 52,
                'role_id' => 4,
            ),
            159 => 
            array (
                'permission_id' => 52,
                'role_id' => 5,
            ),
            160 => 
            array (
                'permission_id' => 52,
                'role_id' => 7,
            ),
            161 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            162 => 
            array (
                'permission_id' => 53,
                'role_id' => 3,
            ),
            163 => 
            array (
                'permission_id' => 53,
                'role_id' => 4,
            ),
            164 => 
            array (
                'permission_id' => 53,
                'role_id' => 5,
            ),
            165 => 
            array (
                'permission_id' => 53,
                'role_id' => 7,
            ),
            166 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            167 => 
            array (
                'permission_id' => 54,
                'role_id' => 3,
            ),
            168 => 
            array (
                'permission_id' => 54,
                'role_id' => 4,
            ),
            169 => 
            array (
                'permission_id' => 54,
                'role_id' => 5,
            ),
            170 => 
            array (
                'permission_id' => 54,
                'role_id' => 7,
            ),
            171 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            172 => 
            array (
                'permission_id' => 55,
                'role_id' => 4,
            ),
            173 => 
            array (
                'permission_id' => 55,
                'role_id' => 5,
            ),
            174 => 
            array (
                'permission_id' => 55,
                'role_id' => 7,
            ),
            175 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            176 => 
            array (
                'permission_id' => 56,
                'role_id' => 4,
            ),
            177 => 
            array (
                'permission_id' => 56,
                'role_id' => 7,
            ),
            178 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            179 => 
            array (
                'permission_id' => 57,
                'role_id' => 4,
            ),
            180 => 
            array (
                'permission_id' => 57,
                'role_id' => 7,
            ),
            181 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            182 => 
            array (
                'permission_id' => 58,
                'role_id' => 4,
            ),
            183 => 
            array (
                'permission_id' => 58,
                'role_id' => 7,
            ),
            184 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            185 => 
            array (
                'permission_id' => 59,
                'role_id' => 4,
            ),
            186 => 
            array (
                'permission_id' => 59,
                'role_id' => 7,
            ),
            187 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            188 => 
            array (
                'permission_id' => 60,
                'role_id' => 4,
            ),
            189 => 
            array (
                'permission_id' => 60,
                'role_id' => 7,
            ),
            190 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            191 => 
            array (
                'permission_id' => 61,
                'role_id' => 4,
            ),
            192 => 
            array (
                'permission_id' => 61,
                'role_id' => 7,
            ),
            193 => 
            array (
                'permission_id' => 61,
                'role_id' => 8,
            ),
            194 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            195 => 
            array (
                'permission_id' => 62,
                'role_id' => 4,
            ),
            196 => 
            array (
                'permission_id' => 62,
                'role_id' => 7,
            ),
            197 => 
            array (
                'permission_id' => 62,
                'role_id' => 8,
            ),
            198 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            199 => 
            array (
                'permission_id' => 63,
                'role_id' => 4,
            ),
            200 => 
            array (
                'permission_id' => 63,
                'role_id' => 7,
            ),
            201 => 
            array (
                'permission_id' => 63,
                'role_id' => 8,
            ),
            202 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            203 => 
            array (
                'permission_id' => 64,
                'role_id' => 4,
            ),
            204 => 
            array (
                'permission_id' => 64,
                'role_id' => 7,
            ),
            205 => 
            array (
                'permission_id' => 64,
                'role_id' => 8,
            ),
            206 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            207 => 
            array (
                'permission_id' => 65,
                'role_id' => 4,
            ),
            208 => 
            array (
                'permission_id' => 65,
                'role_id' => 8,
            ),
            209 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            210 => 
            array (
                'permission_id' => 66,
                'role_id' => 4,
            ),
            211 => 
            array (
                'permission_id' => 66,
                'role_id' => 7,
            ),
            212 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            213 => 
            array (
                'permission_id' => 67,
                'role_id' => 4,
            ),
            214 => 
            array (
                'permission_id' => 67,
                'role_id' => 7,
            ),
            215 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            216 => 
            array (
                'permission_id' => 68,
                'role_id' => 4,
            ),
            217 => 
            array (
                'permission_id' => 68,
                'role_id' => 7,
            ),
            218 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            219 => 
            array (
                'permission_id' => 69,
                'role_id' => 4,
            ),
            220 => 
            array (
                'permission_id' => 69,
                'role_id' => 7,
            ),
            221 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            222 => 
            array (
                'permission_id' => 70,
                'role_id' => 4,
            ),
            223 => 
            array (
                'permission_id' => 70,
                'role_id' => 7,
            ),
            224 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
            225 => 
            array (
                'permission_id' => 76,
                'role_id' => 4,
            ),
            226 => 
            array (
                'permission_id' => 77,
                'role_id' => 1,
            ),
            227 => 
            array (
                'permission_id' => 77,
                'role_id' => 4,
            ),
            228 => 
            array (
                'permission_id' => 78,
                'role_id' => 1,
            ),
            229 => 
            array (
                'permission_id' => 78,
                'role_id' => 4,
            ),
            230 => 
            array (
                'permission_id' => 79,
                'role_id' => 1,
            ),
            231 => 
            array (
                'permission_id' => 79,
                'role_id' => 4,
            ),
            232 => 
            array (
                'permission_id' => 80,
                'role_id' => 1,
            ),
            233 => 
            array (
                'permission_id' => 80,
                'role_id' => 4,
            ),
            234 => 
            array (
                'permission_id' => 86,
                'role_id' => 1,
            ),
            235 => 
            array (
                'permission_id' => 86,
                'role_id' => 4,
            ),
            236 => 
            array (
                'permission_id' => 87,
                'role_id' => 1,
            ),
            237 => 
            array (
                'permission_id' => 87,
                'role_id' => 4,
            ),
            238 => 
            array (
                'permission_id' => 88,
                'role_id' => 1,
            ),
            239 => 
            array (
                'permission_id' => 88,
                'role_id' => 4,
            ),
            240 => 
            array (
                'permission_id' => 89,
                'role_id' => 1,
            ),
            241 => 
            array (
                'permission_id' => 89,
                'role_id' => 4,
            ),
            242 => 
            array (
                'permission_id' => 90,
                'role_id' => 1,
            ),
            243 => 
            array (
                'permission_id' => 90,
                'role_id' => 4,
            ),
        ));
        
        
    }
}