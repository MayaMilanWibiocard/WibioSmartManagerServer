<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CardApdusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('card_apdus')->delete();
        
        \DB::table('card_apdus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'card_id' => 1,
                'apdu_command_id' => 1,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            1 => 
            array (
                'id' => 2,
                'card_id' => 1,
                'apdu_command_id' => 1,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            2 => 
            array (
                'id' => 3,
                'card_id' => 1,
                'apdu_command_id' => 2,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            3 => 
            array (
                'id' => 4,
                'card_id' => 1,
                'apdu_command_id' => 2,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            4 => 
            array (
                'id' => 5,
                'card_id' => 1,
                'apdu_command_id' => 3,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            5 => 
            array (
                'id' => 6,
                'card_id' => 1,
                'apdu_command_id' => 3,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            6 => 
            array (
                'id' => 7,
                'card_id' => 1,
                'apdu_command_id' => 4,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            7 => 
            array (
                'id' => 8,
                'card_id' => 1,
                'apdu_command_id' => 4,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            8 => 
            array (
                'id' => 9,
                'card_id' => 1,
                'apdu_command_id' => 5,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            9 => 
            array (
                'id' => 10,
                'card_id' => 1,
                'apdu_command_id' => 5,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            10 => 
            array (
                'id' => 11,
                'card_id' => 1,
                'apdu_command_id' => 6,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            11 => 
            array (
                'id' => 12,
                'card_id' => 1,
                'apdu_command_id' => 6,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            12 => 
            array (
                'id' => 13,
                'card_id' => 1,
                'apdu_command_id' => 7,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            13 => 
            array (
                'id' => 14,
                'card_id' => 1,
                'apdu_command_id' => 7,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            14 => 
            array (
                'id' => 15,
                'card_id' => 1,
                'apdu_command_id' => 8,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            15 => 
            array (
                'id' => 16,
                'card_id' => 1,
                'apdu_command_id' => 8,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            16 => 
            array (
                'id' => 17,
                'card_id' => 1,
                'apdu_command_id' => 9,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            17 => 
            array (
                'id' => 18,
                'card_id' => 1,
                'apdu_command_id' => 9,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            18 => 
            array (
                'id' => 19,
                'card_id' => 1,
                'apdu_command_id' => 10,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            19 => 
            array (
                'id' => 20,
                'card_id' => 1,
                'apdu_command_id' => 10,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            20 => 
            array (
                'id' => 21,
                'card_id' => 1,
                'apdu_command_id' => 11,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            21 => 
            array (
                'id' => 22,
                'card_id' => 1,
                'apdu_command_id' => 11,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            22 => 
            array (
                'id' => 23,
                'card_id' => 1,
                'apdu_command_id' => 12,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            23 => 
            array (
                'id' => 24,
                'card_id' => 1,
                'apdu_command_id' => 12,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            24 => 
            array (
                'id' => 25,
                'card_id' => 1,
                'apdu_command_id' => 13,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            25 => 
            array (
                'id' => 26,
                'card_id' => 1,
                'apdu_command_id' => 13,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            26 => 
            array (
                'id' => 27,
                'card_id' => 1,
                'apdu_command_id' => 14,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            27 => 
            array (
                'id' => 28,
                'card_id' => 1,
                'apdu_command_id' => 14,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            28 => 
            array (
                'id' => 29,
                'card_id' => 1,
                'apdu_command_id' => 15,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            29 => 
            array (
                'id' => 30,
                'card_id' => 1,
                'apdu_command_id' => 15,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            30 => 
            array (
                'id' => 31,
                'card_id' => 1,
                'apdu_command_id' => 16,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            31 => 
            array (
                'id' => 32,
                'card_id' => 1,
                'apdu_command_id' => 16,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            32 => 
            array (
                'id' => 33,
                'card_id' => 1,
                'apdu_command_id' => 17,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            33 => 
            array (
                'id' => 34,
                'card_id' => 1,
                'apdu_command_id' => 17,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            34 => 
            array (
                'id' => 35,
                'card_id' => 1,
                'apdu_command_id' => 18,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            35 => 
            array (
                'id' => 36,
                'card_id' => 1,
                'apdu_command_id' => 18,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            36 => 
            array (
                'id' => 37,
                'card_id' => 1,
                'apdu_command_id' => 19,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            37 => 
            array (
                'id' => 38,
                'card_id' => 1,
                'apdu_command_id' => 19,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            38 => 
            array (
                'id' => 39,
                'card_id' => 1,
                'apdu_command_id' => 20,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            39 => 
            array (
                'id' => 40,
                'card_id' => 1,
                'apdu_command_id' => 20,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            40 => 
            array (
                'id' => 41,
                'card_id' => 1,
                'apdu_command_id' => 21,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            41 => 
            array (
                'id' => 42,
                'card_id' => 1,
                'apdu_command_id' => 21,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            42 => 
            array (
                'id' => 43,
                'card_id' => 1,
                'apdu_command_id' => 22,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            43 => 
            array (
                'id' => 44,
                'card_id' => 1,
                'apdu_command_id' => 22,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            44 => 
            array (
                'id' => 45,
                'card_id' => 1,
                'apdu_command_id' => 23,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            45 => 
            array (
                'id' => 46,
                'card_id' => 1,
                'apdu_command_id' => 23,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            46 => 
            array (
                'id' => 47,
                'card_id' => 1,
                'apdu_command_id' => 24,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            47 => 
            array (
                'id' => 48,
                'card_id' => 1,
                'apdu_command_id' => 24,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            48 => 
            array (
                'id' => 49,
                'card_id' => 1,
                'apdu_command_id' => 25,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            49 => 
            array (
                'id' => 50,
                'card_id' => 1,
                'apdu_command_id' => 25,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            50 => 
            array (
                'id' => 51,
                'card_id' => 1,
                'apdu_command_id' => 26,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            51 => 
            array (
                'id' => 52,
                'card_id' => 1,
                'apdu_command_id' => 26,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            52 => 
            array (
                'id' => 53,
                'card_id' => 1,
                'apdu_command_id' => 27,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            53 => 
            array (
                'id' => 54,
                'card_id' => 1,
                'apdu_command_id' => 27,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            54 => 
            array (
                'id' => 55,
                'card_id' => 1,
                'apdu_command_id' => 28,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            55 => 
            array (
                'id' => 56,
                'card_id' => 1,
                'apdu_command_id' => 28,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            56 => 
            array (
                'id' => 57,
                'card_id' => 1,
                'apdu_command_id' => 29,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            57 => 
            array (
                'id' => 58,
                'card_id' => 1,
                'apdu_command_id' => 29,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            58 => 
            array (
                'id' => 59,
                'card_id' => 1,
                'apdu_command_id' => 30,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            59 => 
            array (
                'id' => 60,
                'card_id' => 1,
                'apdu_command_id' => 30,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            60 => 
            array (
                'id' => 61,
                'card_id' => 1,
                'apdu_command_id' => 31,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            61 => 
            array (
                'id' => 62,
                'card_id' => 1,
                'apdu_command_id' => 31,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            62 => 
            array (
                'id' => 63,
                'card_id' => 1,
                'apdu_command_id' => 32,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            63 => 
            array (
                'id' => 64,
                'card_id' => 1,
                'apdu_command_id' => 32,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            64 => 
            array (
                'id' => 65,
                'card_id' => 1,
                'apdu_command_id' => 33,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            65 => 
            array (
                'id' => 66,
                'card_id' => 1,
                'apdu_command_id' => 33,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            66 => 
            array (
                'id' => 67,
                'card_id' => 1,
                'apdu_command_id' => 34,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            67 => 
            array (
                'id' => 68,
                'card_id' => 1,
                'apdu_command_id' => 34,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            68 => 
            array (
                'id' => 69,
                'card_id' => 1,
                'apdu_command_id' => 35,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            69 => 
            array (
                'id' => 70,
                'card_id' => 1,
                'apdu_command_id' => 35,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            70 => 
            array (
                'id' => 71,
                'card_id' => 1,
                'apdu_command_id' => 36,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            71 => 
            array (
                'id' => 72,
                'card_id' => 1,
                'apdu_command_id' => 36,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            72 => 
            array (
                'id' => 73,
                'card_id' => 1,
                'apdu_command_id' => 37,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            73 => 
            array (
                'id' => 74,
                'card_id' => 1,
                'apdu_command_id' => 37,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            74 => 
            array (
                'id' => 75,
                'card_id' => 1,
                'apdu_command_id' => 38,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            75 => 
            array (
                'id' => 76,
                'card_id' => 1,
                'apdu_command_id' => 38,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            76 => 
            array (
                'id' => 77,
                'card_id' => 1,
                'apdu_command_id' => 39,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            77 => 
            array (
                'id' => 78,
                'card_id' => 1,
                'apdu_command_id' => 39,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            78 => 
            array (
                'id' => 79,
                'card_id' => 1,
                'apdu_command_id' => 40,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            79 => 
            array (
                'id' => 80,
                'card_id' => 1,
                'apdu_command_id' => 40,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            80 => 
            array (
                'id' => 81,
                'card_id' => 1,
                'apdu_command_id' => 41,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            81 => 
            array (
                'id' => 82,
                'card_id' => 1,
                'apdu_command_id' => 41,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            82 => 
            array (
                'id' => 83,
                'card_id' => 1,
                'apdu_command_id' => 42,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            83 => 
            array (
                'id' => 84,
                'card_id' => 1,
                'apdu_command_id' => 42,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            84 => 
            array (
                'id' => 85,
                'card_id' => 1,
                'apdu_command_id' => 43,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            85 => 
            array (
                'id' => 86,
                'card_id' => 1,
                'apdu_command_id' => 43,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            86 => 
            array (
                'id' => 87,
                'card_id' => 1,
                'apdu_command_id' => 44,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            87 => 
            array (
                'id' => 88,
                'card_id' => 1,
                'apdu_command_id' => 44,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            88 => 
            array (
                'id' => 89,
                'card_id' => 1,
                'apdu_command_id' => 45,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            89 => 
            array (
                'id' => 90,
                'card_id' => 1,
                'apdu_command_id' => 45,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            90 => 
            array (
                'id' => 91,
                'card_id' => 1,
                'apdu_command_id' => 46,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            91 => 
            array (
                'id' => 92,
                'card_id' => 1,
                'apdu_command_id' => 46,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            92 => 
            array (
                'id' => 93,
                'card_id' => 1,
                'apdu_command_id' => 47,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            93 => 
            array (
                'id' => 94,
                'card_id' => 1,
                'apdu_command_id' => 47,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            94 => 
            array (
                'id' => 95,
                'card_id' => 1,
                'apdu_command_id' => 48,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            95 => 
            array (
                'id' => 96,
                'card_id' => 1,
                'apdu_command_id' => 48,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            96 => 
            array (
                'id' => 97,
                'card_id' => 1,
                'apdu_command_id' => 49,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            97 => 
            array (
                'id' => 98,
                'card_id' => 1,
                'apdu_command_id' => 49,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            98 => 
            array (
                'id' => 99,
                'card_id' => 1,
                'apdu_command_id' => 50,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            99 => 
            array (
                'id' => 100,
                'card_id' => 1,
                'apdu_command_id' => 50,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            100 => 
            array (
                'id' => 101,
                'card_id' => 1,
                'apdu_command_id' => 51,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            101 => 
            array (
                'id' => 102,
                'card_id' => 1,
                'apdu_command_id' => 51,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            102 => 
            array (
                'id' => 103,
                'card_id' => 1,
                'apdu_command_id' => 52,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            103 => 
            array (
                'id' => 104,
                'card_id' => 1,
                'apdu_command_id' => 52,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            104 => 
            array (
                'id' => 105,
                'card_id' => 1,
                'apdu_command_id' => 53,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            105 => 
            array (
                'id' => 106,
                'card_id' => 1,
                'apdu_command_id' => 53,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            106 => 
            array (
                'id' => 107,
                'card_id' => 1,
                'apdu_command_id' => 54,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            107 => 
            array (
                'id' => 108,
                'card_id' => 1,
                'apdu_command_id' => 54,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            108 => 
            array (
                'id' => 109,
                'card_id' => 1,
                'apdu_command_id' => 55,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            109 => 
            array (
                'id' => 110,
                'card_id' => 1,
                'apdu_command_id' => 55,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            110 => 
            array (
                'id' => 111,
                'card_id' => 1,
                'apdu_command_id' => 56,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            111 => 
            array (
                'id' => 112,
                'card_id' => 1,
                'apdu_command_id' => 56,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            112 => 
            array (
                'id' => 113,
                'card_id' => 1,
                'apdu_command_id' => 57,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            113 => 
            array (
                'id' => 114,
                'card_id' => 1,
                'apdu_command_id' => 57,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            114 => 
            array (
                'id' => 115,
                'card_id' => 1,
                'apdu_command_id' => 58,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            115 => 
            array (
                'id' => 116,
                'card_id' => 1,
                'apdu_command_id' => 58,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            116 => 
            array (
                'id' => 117,
                'card_id' => 1,
                'apdu_command_id' => 59,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            117 => 
            array (
                'id' => 118,
                'card_id' => 1,
                'apdu_command_id' => 59,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            118 => 
            array (
                'id' => 119,
                'card_id' => 1,
                'apdu_command_id' => 60,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            119 => 
            array (
                'id' => 120,
                'card_id' => 1,
                'apdu_command_id' => 60,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            120 => 
            array (
                'id' => 121,
                'card_id' => 1,
                'apdu_command_id' => 61,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            121 => 
            array (
                'id' => 122,
                'card_id' => 1,
                'apdu_command_id' => 61,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            122 => 
            array (
                'id' => 123,
                'card_id' => 1,
                'apdu_command_id' => 62,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            123 => 
            array (
                'id' => 124,
                'card_id' => 1,
                'apdu_command_id' => 62,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            124 => 
            array (
                'id' => 125,
                'card_id' => 1,
                'apdu_command_id' => 63,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            125 => 
            array (
                'id' => 126,
                'card_id' => 1,
                'apdu_command_id' => 63,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            126 => 
            array (
                'id' => 127,
                'card_id' => 1,
                'apdu_command_id' => 64,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            127 => 
            array (
                'id' => 128,
                'card_id' => 1,
                'apdu_command_id' => 64,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            128 => 
            array (
                'id' => 129,
                'card_id' => 1,
                'apdu_command_id' => 65,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            129 => 
            array (
                'id' => 130,
                'card_id' => 1,
                'apdu_command_id' => 65,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            130 => 
            array (
                'id' => 131,
                'card_id' => 1,
                'apdu_command_id' => 66,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            131 => 
            array (
                'id' => 132,
                'card_id' => 1,
                'apdu_command_id' => 66,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            132 => 
            array (
                'id' => 133,
                'card_id' => 1,
                'apdu_command_id' => 67,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            133 => 
            array (
                'id' => 134,
                'card_id' => 1,
                'apdu_command_id' => 67,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            134 => 
            array (
                'id' => 135,
                'card_id' => 1,
                'apdu_command_id' => 68,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            135 => 
            array (
                'id' => 136,
                'card_id' => 1,
                'apdu_command_id' => 68,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            136 => 
            array (
                'id' => 137,
                'card_id' => 1,
                'apdu_command_id' => 69,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            137 => 
            array (
                'id' => 138,
                'card_id' => 1,
                'apdu_command_id' => 69,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            138 => 
            array (
                'id' => 139,
                'card_id' => 1,
                'apdu_command_id' => 70,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            139 => 
            array (
                'id' => 140,
                'card_id' => 1,
                'apdu_command_id' => 70,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            140 => 
            array (
                'id' => 141,
                'card_id' => 1,
                'apdu_command_id' => 71,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            141 => 
            array (
                'id' => 142,
                'card_id' => 1,
                'apdu_command_id' => 71,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            142 => 
            array (
                'id' => 143,
                'card_id' => 1,
                'apdu_command_id' => 72,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            143 => 
            array (
                'id' => 144,
                'card_id' => 1,
                'apdu_command_id' => 72,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            144 => 
            array (
                'id' => 145,
                'card_id' => 1,
                'apdu_command_id' => 73,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            145 => 
            array (
                'id' => 146,
                'card_id' => 1,
                'apdu_command_id' => 73,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            146 => 
            array (
                'id' => 147,
                'card_id' => 1,
                'apdu_command_id' => 74,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            147 => 
            array (
                'id' => 148,
                'card_id' => 1,
                'apdu_command_id' => 74,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            148 => 
            array (
                'id' => 149,
                'card_id' => 1,
                'apdu_command_id' => 75,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            149 => 
            array (
                'id' => 150,
                'card_id' => 1,
                'apdu_command_id' => 75,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            150 => 
            array (
                'id' => 151,
                'card_id' => 1,
                'apdu_command_id' => 76,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            151 => 
            array (
                'id' => 152,
                'card_id' => 1,
                'apdu_command_id' => 76,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            152 => 
            array (
                'id' => 153,
                'card_id' => 1,
                'apdu_command_id' => 77,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            153 => 
            array (
                'id' => 154,
                'card_id' => 1,
                'apdu_command_id' => 77,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            154 => 
            array (
                'id' => 155,
                'card_id' => 1,
                'apdu_command_id' => 78,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            155 => 
            array (
                'id' => 156,
                'card_id' => 1,
                'apdu_command_id' => 78,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            156 => 
            array (
                'id' => 157,
                'card_id' => 1,
                'apdu_command_id' => 79,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            157 => 
            array (
                'id' => 158,
                'card_id' => 1,
                'apdu_command_id' => 79,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            158 => 
            array (
                'id' => 159,
                'card_id' => 1,
                'apdu_command_id' => 80,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            159 => 
            array (
                'id' => 160,
                'card_id' => 1,
                'apdu_command_id' => 80,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            160 => 
            array (
                'id' => 161,
                'card_id' => 1,
                'apdu_command_id' => 81,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            161 => 
            array (
                'id' => 162,
                'card_id' => 1,
                'apdu_command_id' => 81,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            162 => 
            array (
                'id' => 163,
                'card_id' => 1,
                'apdu_command_id' => 82,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            163 => 
            array (
                'id' => 164,
                'card_id' => 1,
                'apdu_command_id' => 82,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            164 => 
            array (
                'id' => 165,
                'card_id' => 1,
                'apdu_command_id' => 83,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            165 => 
            array (
                'id' => 166,
                'card_id' => 1,
                'apdu_command_id' => 83,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            166 => 
            array (
                'id' => 167,
                'card_id' => 1,
                'apdu_command_id' => 84,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            167 => 
            array (
                'id' => 168,
                'card_id' => 1,
                'apdu_command_id' => 84,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            168 => 
            array (
                'id' => 169,
                'card_id' => 1,
                'apdu_command_id' => 85,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            169 => 
            array (
                'id' => 170,
                'card_id' => 1,
                'apdu_command_id' => 85,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            170 => 
            array (
                'id' => 171,
                'card_id' => 1,
                'apdu_command_id' => 86,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            171 => 
            array (
                'id' => 172,
                'card_id' => 1,
                'apdu_command_id' => 86,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            172 => 
            array (
                'id' => 173,
                'card_id' => 1,
                'apdu_command_id' => 87,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            173 => 
            array (
                'id' => 174,
                'card_id' => 1,
                'apdu_command_id' => 87,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            174 => 
            array (
                'id' => 175,
                'card_id' => 1,
                'apdu_command_id' => 88,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            175 => 
            array (
                'id' => 176,
                'card_id' => 1,
                'apdu_command_id' => 88,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            176 => 
            array (
                'id' => 177,
                'card_id' => 1,
                'apdu_command_id' => 89,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            177 => 
            array (
                'id' => 178,
                'card_id' => 1,
                'apdu_command_id' => 89,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            178 => 
            array (
                'id' => 179,
                'card_id' => 1,
                'apdu_command_id' => 90,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            179 => 
            array (
                'id' => 180,
                'card_id' => 1,
                'apdu_command_id' => 90,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            180 => 
            array (
                'id' => 181,
                'card_id' => 1,
                'apdu_command_id' => 91,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            181 => 
            array (
                'id' => 182,
                'card_id' => 1,
                'apdu_command_id' => 91,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            182 => 
            array (
                'id' => 183,
                'card_id' => 1,
                'apdu_command_id' => 92,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            183 => 
            array (
                'id' => 184,
                'card_id' => 1,
                'apdu_command_id' => 92,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            184 => 
            array (
                'id' => 185,
                'card_id' => 1,
                'apdu_command_id' => 93,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            185 => 
            array (
                'id' => 186,
                'card_id' => 1,
                'apdu_command_id' => 93,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            186 => 
            array (
                'id' => 187,
                'card_id' => 1,
                'apdu_command_id' => 94,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            187 => 
            array (
                'id' => 188,
                'card_id' => 1,
                'apdu_command_id' => 94,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            188 => 
            array (
                'id' => 189,
                'card_id' => 1,
                'apdu_command_id' => 95,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            189 => 
            array (
                'id' => 190,
                'card_id' => 1,
                'apdu_command_id' => 95,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            190 => 
            array (
                'id' => 191,
                'card_id' => 1,
                'apdu_command_id' => 96,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            191 => 
            array (
                'id' => 192,
                'card_id' => 1,
                'apdu_command_id' => 96,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            192 => 
            array (
                'id' => 193,
                'card_id' => 1,
                'apdu_command_id' => 97,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            193 => 
            array (
                'id' => 194,
                'card_id' => 1,
                'apdu_command_id' => 97,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            194 => 
            array (
                'id' => 195,
                'card_id' => 1,
                'apdu_command_id' => 98,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            195 => 
            array (
                'id' => 196,
                'card_id' => 1,
                'apdu_command_id' => 98,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            196 => 
            array (
                'id' => 197,
                'card_id' => 1,
                'apdu_command_id' => 99,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            197 => 
            array (
                'id' => 198,
                'card_id' => 1,
                'apdu_command_id' => 99,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            198 => 
            array (
                'id' => 199,
                'card_id' => 1,
                'apdu_command_id' => 100,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            199 => 
            array (
                'id' => 200,
                'card_id' => 1,
                'apdu_command_id' => 100,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            200 => 
            array (
                'id' => 201,
                'card_id' => 1,
                'apdu_command_id' => 101,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            201 => 
            array (
                'id' => 202,
                'card_id' => 1,
                'apdu_command_id' => 101,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            202 => 
            array (
                'id' => 203,
                'card_id' => 1,
                'apdu_command_id' => 102,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            203 => 
            array (
                'id' => 204,
                'card_id' => 1,
                'apdu_command_id' => 102,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            204 => 
            array (
                'id' => 205,
                'card_id' => 1,
                'apdu_command_id' => 103,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            205 => 
            array (
                'id' => 206,
                'card_id' => 1,
                'apdu_command_id' => 103,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            206 => 
            array (
                'id' => 207,
                'card_id' => 1,
                'apdu_command_id' => 104,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            207 => 
            array (
                'id' => 208,
                'card_id' => 1,
                'apdu_command_id' => 104,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            208 => 
            array (
                'id' => 209,
                'card_id' => 1,
                'apdu_command_id' => 105,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            209 => 
            array (
                'id' => 210,
                'card_id' => 1,
                'apdu_command_id' => 105,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            210 => 
            array (
                'id' => 211,
                'card_id' => 1,
                'apdu_command_id' => 106,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            211 => 
            array (
                'id' => 212,
                'card_id' => 1,
                'apdu_command_id' => 106,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            212 => 
            array (
                'id' => 213,
                'card_id' => 1,
                'apdu_command_id' => 107,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            213 => 
            array (
                'id' => 214,
                'card_id' => 1,
                'apdu_command_id' => 107,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            214 => 
            array (
                'id' => 215,
                'card_id' => 1,
                'apdu_command_id' => 108,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            215 => 
            array (
                'id' => 216,
                'card_id' => 1,
                'apdu_command_id' => 108,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            216 => 
            array (
                'id' => 217,
                'card_id' => 1,
                'apdu_command_id' => 109,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            217 => 
            array (
                'id' => 218,
                'card_id' => 1,
                'apdu_command_id' => 109,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            218 => 
            array (
                'id' => 219,
                'card_id' => 1,
                'apdu_command_id' => 110,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            219 => 
            array (
                'id' => 220,
                'card_id' => 1,
                'apdu_command_id' => 110,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            220 => 
            array (
                'id' => 221,
                'card_id' => 1,
                'apdu_command_id' => 111,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            221 => 
            array (
                'id' => 222,
                'card_id' => 1,
                'apdu_command_id' => 111,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            222 => 
            array (
                'id' => 223,
                'card_id' => 1,
                'apdu_command_id' => 112,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            223 => 
            array (
                'id' => 224,
                'card_id' => 1,
                'apdu_command_id' => 112,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            224 => 
            array (
                'id' => 225,
                'card_id' => 1,
                'apdu_command_id' => 113,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            225 => 
            array (
                'id' => 226,
                'card_id' => 1,
                'apdu_command_id' => 113,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            226 => 
            array (
                'id' => 227,
                'card_id' => 1,
                'apdu_command_id' => 114,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            227 => 
            array (
                'id' => 228,
                'card_id' => 1,
                'apdu_command_id' => 114,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            228 => 
            array (
                'id' => 229,
                'card_id' => 1,
                'apdu_command_id' => 115,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            229 => 
            array (
                'id' => 230,
                'card_id' => 1,
                'apdu_command_id' => 115,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            230 => 
            array (
                'id' => 231,
                'card_id' => 1,
                'apdu_command_id' => 116,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            231 => 
            array (
                'id' => 232,
                'card_id' => 1,
                'apdu_command_id' => 116,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            232 => 
            array (
                'id' => 233,
                'card_id' => 1,
                'apdu_command_id' => 117,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            233 => 
            array (
                'id' => 234,
                'card_id' => 1,
                'apdu_command_id' => 117,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            234 => 
            array (
                'id' => 235,
                'card_id' => 1,
                'apdu_command_id' => 118,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            235 => 
            array (
                'id' => 236,
                'card_id' => 1,
                'apdu_command_id' => 118,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            236 => 
            array (
                'id' => 237,
                'card_id' => 1,
                'apdu_command_id' => 119,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            237 => 
            array (
                'id' => 238,
                'card_id' => 1,
                'apdu_command_id' => 119,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            238 => 
            array (
                'id' => 239,
                'card_id' => 1,
                'apdu_command_id' => 120,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            239 => 
            array (
                'id' => 240,
                'card_id' => 1,
                'apdu_command_id' => 120,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            240 => 
            array (
                'id' => 241,
                'card_id' => 1,
                'apdu_command_id' => 121,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            241 => 
            array (
                'id' => 242,
                'card_id' => 1,
                'apdu_command_id' => 121,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            242 => 
            array (
                'id' => 243,
                'card_id' => 1,
                'apdu_command_id' => 122,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            243 => 
            array (
                'id' => 244,
                'card_id' => 1,
                'apdu_command_id' => 122,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            244 => 
            array (
                'id' => 245,
                'card_id' => 1,
                'apdu_command_id' => 123,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            245 => 
            array (
                'id' => 246,
                'card_id' => 1,
                'apdu_command_id' => 123,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            246 => 
            array (
                'id' => 247,
                'card_id' => 1,
                'apdu_command_id' => 124,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            247 => 
            array (
                'id' => 248,
                'card_id' => 1,
                'apdu_command_id' => 124,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            248 => 
            array (
                'id' => 249,
                'card_id' => 1,
                'apdu_command_id' => 125,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            249 => 
            array (
                'id' => 250,
                'card_id' => 1,
                'apdu_command_id' => 125,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            250 => 
            array (
                'id' => 251,
                'card_id' => 1,
                'apdu_command_id' => 126,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            251 => 
            array (
                'id' => 252,
                'card_id' => 1,
                'apdu_command_id' => 126,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            252 => 
            array (
                'id' => 253,
                'card_id' => 1,
                'apdu_command_id' => 127,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            253 => 
            array (
                'id' => 254,
                'card_id' => 1,
                'apdu_command_id' => 127,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            254 => 
            array (
                'id' => 255,
                'card_id' => 1,
                'apdu_command_id' => 128,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            255 => 
            array (
                'id' => 256,
                'card_id' => 1,
                'apdu_command_id' => 128,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            256 => 
            array (
                'id' => 257,
                'card_id' => 1,
                'apdu_command_id' => 129,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            257 => 
            array (
                'id' => 258,
                'card_id' => 1,
                'apdu_command_id' => 129,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            258 => 
            array (
                'id' => 259,
                'card_id' => 1,
                'apdu_command_id' => 130,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            259 => 
            array (
                'id' => 260,
                'card_id' => 1,
                'apdu_command_id' => 130,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            260 => 
            array (
                'id' => 261,
                'card_id' => 1,
                'apdu_command_id' => 131,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            261 => 
            array (
                'id' => 262,
                'card_id' => 1,
                'apdu_command_id' => 131,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            262 => 
            array (
                'id' => 263,
                'card_id' => 1,
                'apdu_command_id' => 132,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            263 => 
            array (
                'id' => 264,
                'card_id' => 1,
                'apdu_command_id' => 132,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            264 => 
            array (
                'id' => 265,
                'card_id' => 1,
                'apdu_command_id' => 133,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            265 => 
            array (
                'id' => 266,
                'card_id' => 1,
                'apdu_command_id' => 133,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            266 => 
            array (
                'id' => 267,
                'card_id' => 1,
                'apdu_command_id' => 134,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            267 => 
            array (
                'id' => 268,
                'card_id' => 1,
                'apdu_command_id' => 134,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            268 => 
            array (
                'id' => 269,
                'card_id' => 1,
                'apdu_command_id' => 135,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            269 => 
            array (
                'id' => 270,
                'card_id' => 1,
                'apdu_command_id' => 135,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            270 => 
            array (
                'id' => 271,
                'card_id' => 1,
                'apdu_command_id' => 136,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            271 => 
            array (
                'id' => 272,
                'card_id' => 1,
                'apdu_command_id' => 136,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            272 => 
            array (
                'id' => 273,
                'card_id' => 1,
                'apdu_command_id' => 137,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            273 => 
            array (
                'id' => 274,
                'card_id' => 1,
                'apdu_command_id' => 137,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            274 => 
            array (
                'id' => 275,
                'card_id' => 1,
                'apdu_command_id' => 138,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            275 => 
            array (
                'id' => 276,
                'card_id' => 1,
                'apdu_command_id' => 138,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            276 => 
            array (
                'id' => 277,
                'card_id' => 1,
                'apdu_command_id' => 139,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            277 => 
            array (
                'id' => 278,
                'card_id' => 1,
                'apdu_command_id' => 139,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            278 => 
            array (
                'id' => 279,
                'card_id' => 1,
                'apdu_command_id' => 140,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            279 => 
            array (
                'id' => 280,
                'card_id' => 1,
                'apdu_command_id' => 140,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            280 => 
            array (
                'id' => 281,
                'card_id' => 1,
                'apdu_command_id' => 141,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            281 => 
            array (
                'id' => 282,
                'card_id' => 1,
                'apdu_command_id' => 141,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            282 => 
            array (
                'id' => 283,
                'card_id' => 1,
                'apdu_command_id' => 142,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            283 => 
            array (
                'id' => 284,
                'card_id' => 1,
                'apdu_command_id' => 142,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            284 => 
            array (
                'id' => 285,
                'card_id' => 1,
                'apdu_command_id' => 143,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            285 => 
            array (
                'id' => 286,
                'card_id' => 1,
                'apdu_command_id' => 143,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            286 => 
            array (
                'id' => 287,
                'card_id' => 1,
                'apdu_command_id' => 144,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            287 => 
            array (
                'id' => 288,
                'card_id' => 1,
                'apdu_command_id' => 144,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            288 => 
            array (
                'id' => 289,
                'card_id' => 1,
                'apdu_command_id' => 145,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            289 => 
            array (
                'id' => 290,
                'card_id' => 1,
                'apdu_command_id' => 145,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            290 => 
            array (
                'id' => 291,
                'card_id' => 1,
                'apdu_command_id' => 146,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            291 => 
            array (
                'id' => 292,
                'card_id' => 1,
                'apdu_command_id' => 146,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            292 => 
            array (
                'id' => 293,
                'card_id' => 1,
                'apdu_command_id' => 147,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            293 => 
            array (
                'id' => 294,
                'card_id' => 1,
                'apdu_command_id' => 147,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            294 => 
            array (
                'id' => 295,
                'card_id' => 1,
                'apdu_command_id' => 148,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            295 => 
            array (
                'id' => 296,
                'card_id' => 1,
                'apdu_command_id' => 148,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            296 => 
            array (
                'id' => 297,
                'card_id' => 1,
                'apdu_command_id' => 149,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            297 => 
            array (
                'id' => 298,
                'card_id' => 1,
                'apdu_command_id' => 149,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            298 => 
            array (
                'id' => 299,
                'card_id' => 1,
                'apdu_command_id' => 150,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            299 => 
            array (
                'id' => 300,
                'card_id' => 1,
                'apdu_command_id' => 150,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            300 => 
            array (
                'id' => 301,
                'card_id' => 1,
                'apdu_command_id' => 151,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            301 => 
            array (
                'id' => 302,
                'card_id' => 1,
                'apdu_command_id' => 151,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            302 => 
            array (
                'id' => 303,
                'card_id' => 1,
                'apdu_command_id' => 152,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            303 => 
            array (
                'id' => 304,
                'card_id' => 1,
                'apdu_command_id' => 152,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            304 => 
            array (
                'id' => 305,
                'card_id' => 1,
                'apdu_command_id' => 153,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            305 => 
            array (
                'id' => 306,
                'card_id' => 1,
                'apdu_command_id' => 153,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            306 => 
            array (
                'id' => 307,
                'card_id' => 1,
                'apdu_command_id' => 154,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            307 => 
            array (
                'id' => 308,
                'card_id' => 1,
                'apdu_command_id' => 154,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            308 => 
            array (
                'id' => 309,
                'card_id' => 1,
                'apdu_command_id' => 155,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            309 => 
            array (
                'id' => 310,
                'card_id' => 1,
                'apdu_command_id' => 155,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            310 => 
            array (
                'id' => 311,
                'card_id' => 1,
                'apdu_command_id' => 156,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            311 => 
            array (
                'id' => 312,
                'card_id' => 1,
                'apdu_command_id' => 156,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            312 => 
            array (
                'id' => 313,
                'card_id' => 1,
                'apdu_command_id' => 157,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            313 => 
            array (
                'id' => 314,
                'card_id' => 1,
                'apdu_command_id' => 157,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            314 => 
            array (
                'id' => 315,
                'card_id' => 1,
                'apdu_command_id' => 158,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            315 => 
            array (
                'id' => 316,
                'card_id' => 1,
                'apdu_command_id' => 158,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            316 => 
            array (
                'id' => 317,
                'card_id' => 1,
                'apdu_command_id' => 159,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            317 => 
            array (
                'id' => 318,
                'card_id' => 1,
                'apdu_command_id' => 159,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            318 => 
            array (
                'id' => 319,
                'card_id' => 1,
                'apdu_command_id' => 160,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            319 => 
            array (
                'id' => 320,
                'card_id' => 1,
                'apdu_command_id' => 160,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            320 => 
            array (
                'id' => 321,
                'card_id' => 1,
                'apdu_command_id' => 161,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            321 => 
            array (
                'id' => 322,
                'card_id' => 1,
                'apdu_command_id' => 161,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            322 => 
            array (
                'id' => 323,
                'card_id' => 1,
                'apdu_command_id' => 162,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            323 => 
            array (
                'id' => 324,
                'card_id' => 1,
                'apdu_command_id' => 162,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            324 => 
            array (
                'id' => 325,
                'card_id' => 1,
                'apdu_command_id' => 163,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            325 => 
            array (
                'id' => 326,
                'card_id' => 1,
                'apdu_command_id' => 163,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            326 => 
            array (
                'id' => 327,
                'card_id' => 1,
                'apdu_command_id' => 164,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            327 => 
            array (
                'id' => 328,
                'card_id' => 1,
                'apdu_command_id' => 164,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            328 => 
            array (
                'id' => 329,
                'card_id' => 1,
                'apdu_command_id' => 165,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            329 => 
            array (
                'id' => 330,
                'card_id' => 1,
                'apdu_command_id' => 165,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            330 => 
            array (
                'id' => 331,
                'card_id' => 1,
                'apdu_command_id' => 166,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            331 => 
            array (
                'id' => 332,
                'card_id' => 1,
                'apdu_command_id' => 166,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            332 => 
            array (
                'id' => 333,
                'card_id' => 1,
                'apdu_command_id' => 167,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            333 => 
            array (
                'id' => 334,
                'card_id' => 1,
                'apdu_command_id' => 167,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            334 => 
            array (
                'id' => 335,
                'card_id' => 1,
                'apdu_command_id' => 168,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            335 => 
            array (
                'id' => 336,
                'card_id' => 1,
                'apdu_command_id' => 168,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            336 => 
            array (
                'id' => 337,
                'card_id' => 1,
                'apdu_command_id' => 169,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            337 => 
            array (
                'id' => 338,
                'card_id' => 1,
                'apdu_command_id' => 169,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            338 => 
            array (
                'id' => 339,
                'card_id' => 1,
                'apdu_command_id' => 170,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            339 => 
            array (
                'id' => 340,
                'card_id' => 1,
                'apdu_command_id' => 170,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            340 => 
            array (
                'id' => 341,
                'card_id' => 1,
                'apdu_command_id' => 171,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            341 => 
            array (
                'id' => 342,
                'card_id' => 1,
                'apdu_command_id' => 171,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            342 => 
            array (
                'id' => 343,
                'card_id' => 1,
                'apdu_command_id' => 172,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            343 => 
            array (
                'id' => 344,
                'card_id' => 1,
                'apdu_command_id' => 172,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            344 => 
            array (
                'id' => 345,
                'card_id' => 1,
                'apdu_command_id' => 173,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            345 => 
            array (
                'id' => 346,
                'card_id' => 1,
                'apdu_command_id' => 173,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            346 => 
            array (
                'id' => 347,
                'card_id' => 1,
                'apdu_command_id' => 174,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            347 => 
            array (
                'id' => 348,
                'card_id' => 1,
                'apdu_command_id' => 174,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            348 => 
            array (
                'id' => 349,
                'card_id' => 1,
                'apdu_command_id' => 175,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            349 => 
            array (
                'id' => 350,
                'card_id' => 1,
                'apdu_command_id' => 175,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            350 => 
            array (
                'id' => 351,
                'card_id' => 1,
                'apdu_command_id' => 176,
                'channel' => 'NFC',
                'crc' => '',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            351 => 
            array (
                'id' => 352,
                'card_id' => 1,
                'apdu_command_id' => 176,
                'channel' => 'BTL',
                'crc' => 'CRC32',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
        ));
        
        
    }
}