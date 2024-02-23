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
                'permission_id' => 11,
                'role_id' => 7,
            ),
            34 => 
            array (
                'permission_id' => 12,
                'role_id' => 1,
            ),
            35 => 
            array (
                'permission_id' => 12,
                'role_id' => 4,
            ),
            36 => 
            array (
                'permission_id' => 12,
                'role_id' => 7,
            ),
            37 => 
            array (
                'permission_id' => 13,
                'role_id' => 1,
            ),
            38 => 
            array (
                'permission_id' => 13,
                'role_id' => 4,
            ),
            39 => 
            array (
                'permission_id' => 13,
                'role_id' => 7,
            ),
            40 => 
            array (
                'permission_id' => 14,
                'role_id' => 1,
            ),
            41 => 
            array (
                'permission_id' => 14,
                'role_id' => 4,
            ),
            42 => 
            array (
                'permission_id' => 14,
                'role_id' => 7,
            ),
            43 => 
            array (
                'permission_id' => 15,
                'role_id' => 1,
            ),
            44 => 
            array (
                'permission_id' => 15,
                'role_id' => 4,
            ),
            45 => 
            array (
                'permission_id' => 16,
                'role_id' => 1,
            ),
            46 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            47 => 
            array (
                'permission_id' => 16,
                'role_id' => 4,
            ),
            48 => 
            array (
                'permission_id' => 16,
                'role_id' => 5,
            ),
            49 => 
            array (
                'permission_id' => 16,
                'role_id' => 6,
            ),
            50 => 
            array (
                'permission_id' => 16,
                'role_id' => 7,
            ),
            51 => 
            array (
                'permission_id' => 16,
                'role_id' => 8,
            ),
            52 => 
            array (
                'permission_id' => 17,
                'role_id' => 1,
            ),
            53 => 
            array (
                'permission_id' => 17,
                'role_id' => 3,
            ),
            54 => 
            array (
                'permission_id' => 17,
                'role_id' => 4,
            ),
            55 => 
            array (
                'permission_id' => 17,
                'role_id' => 6,
            ),
            56 => 
            array (
                'permission_id' => 17,
                'role_id' => 7,
            ),
            57 => 
            array (
                'permission_id' => 17,
                'role_id' => 8,
            ),
            58 => 
            array (
                'permission_id' => 18,
                'role_id' => 1,
            ),
            59 => 
            array (
                'permission_id' => 18,
                'role_id' => 4,
            ),
            60 => 
            array (
                'permission_id' => 18,
                'role_id' => 7,
            ),
            61 => 
            array (
                'permission_id' => 18,
                'role_id' => 8,
            ),
            62 => 
            array (
                'permission_id' => 19,
                'role_id' => 1,
            ),
            63 => 
            array (
                'permission_id' => 19,
                'role_id' => 4,
            ),
            64 => 
            array (
                'permission_id' => 19,
                'role_id' => 7,
            ),
            65 => 
            array (
                'permission_id' => 19,
                'role_id' => 8,
            ),
            66 => 
            array (
                'permission_id' => 20,
                'role_id' => 1,
            ),
            67 => 
            array (
                'permission_id' => 20,
                'role_id' => 4,
            ),
            68 => 
            array (
                'permission_id' => 20,
                'role_id' => 7,
            ),
            69 => 
            array (
                'permission_id' => 20,
                'role_id' => 8,
            ),
            70 => 
            array (
                'permission_id' => 21,
                'role_id' => 1,
            ),
            71 => 
            array (
                'permission_id' => 21,
                'role_id' => 4,
            ),
            72 => 
            array (
                'permission_id' => 22,
                'role_id' => 1,
            ),
            73 => 
            array (
                'permission_id' => 22,
                'role_id' => 4,
            ),
            74 => 
            array (
                'permission_id' => 23,
                'role_id' => 1,
            ),
            75 => 
            array (
                'permission_id' => 23,
                'role_id' => 4,
            ),
            76 => 
            array (
                'permission_id' => 24,
                'role_id' => 1,
            ),
            77 => 
            array (
                'permission_id' => 24,
                'role_id' => 4,
            ),
            78 => 
            array (
                'permission_id' => 25,
                'role_id' => 1,
            ),
            79 => 
            array (
                'permission_id' => 25,
                'role_id' => 4,
            ),
            80 => 
            array (
                'permission_id' => 36,
                'role_id' => 1,
            ),
            81 => 
            array (
                'permission_id' => 36,
                'role_id' => 3,
            ),
            82 => 
            array (
                'permission_id' => 36,
                'role_id' => 4,
            ),
            83 => 
            array (
                'permission_id' => 36,
                'role_id' => 7,
            ),
            84 => 
            array (
                'permission_id' => 36,
                'role_id' => 8,
            ),
            85 => 
            array (
                'permission_id' => 37,
                'role_id' => 1,
            ),
            86 => 
            array (
                'permission_id' => 37,
                'role_id' => 3,
            ),
            87 => 
            array (
                'permission_id' => 37,
                'role_id' => 4,
            ),
            88 => 
            array (
                'permission_id' => 37,
                'role_id' => 7,
            ),
            89 => 
            array (
                'permission_id' => 37,
                'role_id' => 8,
            ),
            90 => 
            array (
                'permission_id' => 38,
                'role_id' => 1,
            ),
            91 => 
            array (
                'permission_id' => 38,
                'role_id' => 3,
            ),
            92 => 
            array (
                'permission_id' => 38,
                'role_id' => 4,
            ),
            93 => 
            array (
                'permission_id' => 38,
                'role_id' => 7,
            ),
            94 => 
            array (
                'permission_id' => 38,
                'role_id' => 8,
            ),
            95 => 
            array (
                'permission_id' => 39,
                'role_id' => 1,
            ),
            96 => 
            array (
                'permission_id' => 39,
                'role_id' => 3,
            ),
            97 => 
            array (
                'permission_id' => 39,
                'role_id' => 4,
            ),
            98 => 
            array (
                'permission_id' => 39,
                'role_id' => 7,
            ),
            99 => 
            array (
                'permission_id' => 39,
                'role_id' => 8,
            ),
            100 => 
            array (
                'permission_id' => 40,
                'role_id' => 1,
            ),
            101 => 
            array (
                'permission_id' => 40,
                'role_id' => 4,
            ),
            102 => 
            array (
                'permission_id' => 40,
                'role_id' => 7,
            ),
            103 => 
            array (
                'permission_id' => 40,
                'role_id' => 8,
            ),
            104 => 
            array (
                'permission_id' => 41,
                'role_id' => 1,
            ),
            105 => 
            array (
                'permission_id' => 41,
                'role_id' => 3,
            ),
            106 => 
            array (
                'permission_id' => 41,
                'role_id' => 4,
            ),
            107 => 
            array (
                'permission_id' => 41,
                'role_id' => 7,
            ),
            108 => 
            array (
                'permission_id' => 41,
                'role_id' => 8,
            ),
            109 => 
            array (
                'permission_id' => 42,
                'role_id' => 1,
            ),
            110 => 
            array (
                'permission_id' => 42,
                'role_id' => 3,
            ),
            111 => 
            array (
                'permission_id' => 42,
                'role_id' => 4,
            ),
            112 => 
            array (
                'permission_id' => 42,
                'role_id' => 7,
            ),
            113 => 
            array (
                'permission_id' => 42,
                'role_id' => 8,
            ),
            114 => 
            array (
                'permission_id' => 43,
                'role_id' => 1,
            ),
            115 => 
            array (
                'permission_id' => 43,
                'role_id' => 3,
            ),
            116 => 
            array (
                'permission_id' => 43,
                'role_id' => 4,
            ),
            117 => 
            array (
                'permission_id' => 43,
                'role_id' => 7,
            ),
            118 => 
            array (
                'permission_id' => 43,
                'role_id' => 8,
            ),
            119 => 
            array (
                'permission_id' => 44,
                'role_id' => 1,
            ),
            120 => 
            array (
                'permission_id' => 44,
                'role_id' => 3,
            ),
            121 => 
            array (
                'permission_id' => 44,
                'role_id' => 4,
            ),
            122 => 
            array (
                'permission_id' => 44,
                'role_id' => 7,
            ),
            123 => 
            array (
                'permission_id' => 44,
                'role_id' => 8,
            ),
            124 => 
            array (
                'permission_id' => 45,
                'role_id' => 1,
            ),
            125 => 
            array (
                'permission_id' => 45,
                'role_id' => 4,
            ),
            126 => 
            array (
                'permission_id' => 45,
                'role_id' => 7,
            ),
            127 => 
            array (
                'permission_id' => 45,
                'role_id' => 8,
            ),
            128 => 
            array (
                'permission_id' => 46,
                'role_id' => 1,
            ),
            129 => 
            array (
                'permission_id' => 46,
                'role_id' => 3,
            ),
            130 => 
            array (
                'permission_id' => 46,
                'role_id' => 4,
            ),
            131 => 
            array (
                'permission_id' => 46,
                'role_id' => 7,
            ),
            132 => 
            array (
                'permission_id' => 46,
                'role_id' => 8,
            ),
            133 => 
            array (
                'permission_id' => 47,
                'role_id' => 1,
            ),
            134 => 
            array (
                'permission_id' => 47,
                'role_id' => 3,
            ),
            135 => 
            array (
                'permission_id' => 47,
                'role_id' => 4,
            ),
            136 => 
            array (
                'permission_id' => 47,
                'role_id' => 7,
            ),
            137 => 
            array (
                'permission_id' => 47,
                'role_id' => 8,
            ),
            138 => 
            array (
                'permission_id' => 48,
                'role_id' => 1,
            ),
            139 => 
            array (
                'permission_id' => 48,
                'role_id' => 3,
            ),
            140 => 
            array (
                'permission_id' => 48,
                'role_id' => 4,
            ),
            141 => 
            array (
                'permission_id' => 48,
                'role_id' => 7,
            ),
            142 => 
            array (
                'permission_id' => 48,
                'role_id' => 8,
            ),
            143 => 
            array (
                'permission_id' => 49,
                'role_id' => 1,
            ),
            144 => 
            array (
                'permission_id' => 49,
                'role_id' => 3,
            ),
            145 => 
            array (
                'permission_id' => 49,
                'role_id' => 4,
            ),
            146 => 
            array (
                'permission_id' => 49,
                'role_id' => 7,
            ),
            147 => 
            array (
                'permission_id' => 49,
                'role_id' => 8,
            ),
            148 => 
            array (
                'permission_id' => 50,
                'role_id' => 1,
            ),
            149 => 
            array (
                'permission_id' => 50,
                'role_id' => 4,
            ),
            150 => 
            array (
                'permission_id' => 50,
                'role_id' => 7,
            ),
            151 => 
            array (
                'permission_id' => 50,
                'role_id' => 8,
            ),
            152 => 
            array (
                'permission_id' => 51,
                'role_id' => 1,
            ),
            153 => 
            array (
                'permission_id' => 51,
                'role_id' => 3,
            ),
            154 => 
            array (
                'permission_id' => 51,
                'role_id' => 4,
            ),
            155 => 
            array (
                'permission_id' => 51,
                'role_id' => 5,
            ),
            156 => 
            array (
                'permission_id' => 51,
                'role_id' => 7,
            ),
            157 => 
            array (
                'permission_id' => 52,
                'role_id' => 1,
            ),
            158 => 
            array (
                'permission_id' => 52,
                'role_id' => 3,
            ),
            159 => 
            array (
                'permission_id' => 52,
                'role_id' => 4,
            ),
            160 => 
            array (
                'permission_id' => 52,
                'role_id' => 5,
            ),
            161 => 
            array (
                'permission_id' => 52,
                'role_id' => 7,
            ),
            162 => 
            array (
                'permission_id' => 53,
                'role_id' => 1,
            ),
            163 => 
            array (
                'permission_id' => 53,
                'role_id' => 3,
            ),
            164 => 
            array (
                'permission_id' => 53,
                'role_id' => 4,
            ),
            165 => 
            array (
                'permission_id' => 53,
                'role_id' => 5,
            ),
            166 => 
            array (
                'permission_id' => 53,
                'role_id' => 7,
            ),
            167 => 
            array (
                'permission_id' => 54,
                'role_id' => 1,
            ),
            168 => 
            array (
                'permission_id' => 54,
                'role_id' => 3,
            ),
            169 => 
            array (
                'permission_id' => 54,
                'role_id' => 4,
            ),
            170 => 
            array (
                'permission_id' => 54,
                'role_id' => 5,
            ),
            171 => 
            array (
                'permission_id' => 54,
                'role_id' => 7,
            ),
            172 => 
            array (
                'permission_id' => 55,
                'role_id' => 1,
            ),
            173 => 
            array (
                'permission_id' => 55,
                'role_id' => 4,
            ),
            174 => 
            array (
                'permission_id' => 55,
                'role_id' => 5,
            ),
            175 => 
            array (
                'permission_id' => 55,
                'role_id' => 7,
            ),
            176 => 
            array (
                'permission_id' => 56,
                'role_id' => 1,
            ),
            177 => 
            array (
                'permission_id' => 56,
                'role_id' => 4,
            ),
            178 => 
            array (
                'permission_id' => 56,
                'role_id' => 7,
            ),
            179 => 
            array (
                'permission_id' => 57,
                'role_id' => 1,
            ),
            180 => 
            array (
                'permission_id' => 57,
                'role_id' => 4,
            ),
            181 => 
            array (
                'permission_id' => 57,
                'role_id' => 7,
            ),
            182 => 
            array (
                'permission_id' => 58,
                'role_id' => 1,
            ),
            183 => 
            array (
                'permission_id' => 58,
                'role_id' => 4,
            ),
            184 => 
            array (
                'permission_id' => 58,
                'role_id' => 7,
            ),
            185 => 
            array (
                'permission_id' => 59,
                'role_id' => 1,
            ),
            186 => 
            array (
                'permission_id' => 59,
                'role_id' => 4,
            ),
            187 => 
            array (
                'permission_id' => 59,
                'role_id' => 7,
            ),
            188 => 
            array (
                'permission_id' => 60,
                'role_id' => 1,
            ),
            189 => 
            array (
                'permission_id' => 60,
                'role_id' => 4,
            ),
            190 => 
            array (
                'permission_id' => 60,
                'role_id' => 7,
            ),
            191 => 
            array (
                'permission_id' => 61,
                'role_id' => 1,
            ),
            192 => 
            array (
                'permission_id' => 61,
                'role_id' => 4,
            ),
            193 => 
            array (
                'permission_id' => 61,
                'role_id' => 7,
            ),
            194 => 
            array (
                'permission_id' => 61,
                'role_id' => 8,
            ),
            195 => 
            array (
                'permission_id' => 62,
                'role_id' => 1,
            ),
            196 => 
            array (
                'permission_id' => 62,
                'role_id' => 4,
            ),
            197 => 
            array (
                'permission_id' => 62,
                'role_id' => 7,
            ),
            198 => 
            array (
                'permission_id' => 62,
                'role_id' => 8,
            ),
            199 => 
            array (
                'permission_id' => 63,
                'role_id' => 1,
            ),
            200 => 
            array (
                'permission_id' => 63,
                'role_id' => 4,
            ),
            201 => 
            array (
                'permission_id' => 63,
                'role_id' => 7,
            ),
            202 => 
            array (
                'permission_id' => 63,
                'role_id' => 8,
            ),
            203 => 
            array (
                'permission_id' => 64,
                'role_id' => 1,
            ),
            204 => 
            array (
                'permission_id' => 64,
                'role_id' => 4,
            ),
            205 => 
            array (
                'permission_id' => 64,
                'role_id' => 7,
            ),
            206 => 
            array (
                'permission_id' => 64,
                'role_id' => 8,
            ),
            207 => 
            array (
                'permission_id' => 65,
                'role_id' => 1,
            ),
            208 => 
            array (
                'permission_id' => 65,
                'role_id' => 4,
            ),
            209 => 
            array (
                'permission_id' => 65,
                'role_id' => 8,
            ),
            210 => 
            array (
                'permission_id' => 66,
                'role_id' => 1,
            ),
            211 => 
            array (
                'permission_id' => 66,
                'role_id' => 4,
            ),
            212 => 
            array (
                'permission_id' => 66,
                'role_id' => 7,
            ),
            213 => 
            array (
                'permission_id' => 67,
                'role_id' => 1,
            ),
            214 => 
            array (
                'permission_id' => 67,
                'role_id' => 4,
            ),
            215 => 
            array (
                'permission_id' => 67,
                'role_id' => 7,
            ),
            216 => 
            array (
                'permission_id' => 68,
                'role_id' => 1,
            ),
            217 => 
            array (
                'permission_id' => 68,
                'role_id' => 4,
            ),
            218 => 
            array (
                'permission_id' => 68,
                'role_id' => 7,
            ),
            219 => 
            array (
                'permission_id' => 69,
                'role_id' => 1,
            ),
            220 => 
            array (
                'permission_id' => 69,
                'role_id' => 4,
            ),
            221 => 
            array (
                'permission_id' => 69,
                'role_id' => 7,
            ),
            222 => 
            array (
                'permission_id' => 70,
                'role_id' => 1,
            ),
            223 => 
            array (
                'permission_id' => 70,
                'role_id' => 4,
            ),
            224 => 
            array (
                'permission_id' => 70,
                'role_id' => 7,
            ),
            225 => 
            array (
                'permission_id' => 76,
                'role_id' => 1,
            ),
            226 => 
            array (
                'permission_id' => 76,
                'role_id' => 4,
            ),
            227 => 
            array (
                'permission_id' => 77,
                'role_id' => 1,
            ),
            228 => 
            array (
                'permission_id' => 77,
                'role_id' => 4,
            ),
            229 => 
            array (
                'permission_id' => 78,
                'role_id' => 1,
            ),
            230 => 
            array (
                'permission_id' => 78,
                'role_id' => 4,
            ),
            231 => 
            array (
                'permission_id' => 79,
                'role_id' => 1,
            ),
            232 => 
            array (
                'permission_id' => 79,
                'role_id' => 4,
            ),
            233 => 
            array (
                'permission_id' => 80,
                'role_id' => 1,
            ),
            234 => 
            array (
                'permission_id' => 80,
                'role_id' => 4,
            ),
            235 => 
            array (
                'permission_id' => 81,
                'role_id' => 1,
            ),
            236 => 
            array (
                'permission_id' => 81,
                'role_id' => 4,
            ),
            237 => 
            array (
                'permission_id' => 82,
                'role_id' => 1,
            ),
            238 => 
            array (
                'permission_id' => 82,
                'role_id' => 4,
            ),
            239 => 
            array (
                'permission_id' => 83,
                'role_id' => 1,
            ),
            240 => 
            array (
                'permission_id' => 83,
                'role_id' => 4,
            ),
            241 => 
            array (
                'permission_id' => 84,
                'role_id' => 1,
            ),
            242 => 
            array (
                'permission_id' => 84,
                'role_id' => 4,
            ),
            243 => 
            array (
                'permission_id' => 85,
                'role_id' => 1,
            ),
            244 => 
            array (
                'permission_id' => 85,
                'role_id' => 4,
            ),
            245 => 
            array (
                'permission_id' => 86,
                'role_id' => 1,
            ),
            246 => 
            array (
                'permission_id' => 86,
                'role_id' => 4,
            ),
            247 => 
            array (
                'permission_id' => 87,
                'role_id' => 1,
            ),
            248 => 
            array (
                'permission_id' => 87,
                'role_id' => 4,
            ),
            249 => 
            array (
                'permission_id' => 88,
                'role_id' => 1,
            ),
            250 => 
            array (
                'permission_id' => 88,
                'role_id' => 4,
            ),
            251 => 
            array (
                'permission_id' => 89,
                'role_id' => 1,
            ),
            252 => 
            array (
                'permission_id' => 89,
                'role_id' => 4,
            ),
            253 => 
            array (
                'permission_id' => 90,
                'role_id' => 1,
            ),
            254 => 
            array (
                'permission_id' => 90,
                'role_id' => 4,
            ),
        ));
        
        
    }
}