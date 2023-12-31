<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApduComponentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('apdu_components')->delete();
        
        \DB::table('apdu_components')->insert(array (
            0 => 
            array (
                'id' => 1,
                'component' => '"B6 86 00" + {images_per_finger} + {sequences_count} + {card_id} + [factoryResetCode] + [sequenceResetCode]',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 2,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            1 => 
            array (
                'id' => 2,
                'component' => '{version_info}',
                'lenght' => 64,
                'leftPadding' => NULL,
                'rightPadding' => '0x00',
                'card_id' => 1,
                'apdu_command_id' => 6,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            2 => 
            array (
                'id' => 3,
                'component' => '[factoryResetCode] + 41 42 43 44 31 32 33 34 61 62 63 64 31 32 33 34',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 7,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            3 => 
            array (
                'id' => 4,
                'component' => '{otp_secret_key}',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 10,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            4 => 
            array (
                'id' => 5,
                'component' => '{card_factory_reset_code}',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 11,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            5 => 
            array (
                'id' => 6,
                'component' => '{payload_str_1} + "00" + {payload_str_2} + "00" + {payload_str_3}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => '0x00',
                'card_id' => 1,
                'apdu_command_id' => 32,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            6 => 
            array (
                'id' => 7,
                'component' => '{payload_str_1} + "00" + {payload_str_2} + "00" + {payload_str_3}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => '0x00',
                'card_id' => 1,
                'apdu_command_id' => 33,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            7 => 
            array (
                'id' => 8,
                'component' => '{payload_str_1} + "00" + {payload_str_2} + "00" + {payload_str_3}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => '0x00',
                'card_id' => 1,
                'apdu_command_id' => 34,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            8 => 
            array (
                'id' => 9,
                'component' => '{payload_str_1} + "00" + {payload_str_2} + "00" + {payload_str_3}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => '0x00',
                'card_id' => 1,
                'apdu_command_id' => 35,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            9 => 
            array (
                'id' => 10,
                'component' => '{payload_str_1} + "00" + {payload_str_2} + "00" + {payload_str_3}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => '0x00',
                'card_id' => 1,
                'apdu_command_id' => 36,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            10 => 
            array (
                'id' => 11,
                'component' => '{payload_str_1} + "00" + {payload_str_2} + "00" + {payload_str_3}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => '0x00',
                'card_id' => 1,
                'apdu_command_id' => 37,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            11 => 
            array (
                'id' => 12,
                'component' => '{payload_str_1} + "00" + {payload_str_2} + "00" + {payload_str_3}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => '0x00',
                'card_id' => 1,
                'apdu_command_id' => 38,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            12 => 
            array (
                'id' => 13,
                'component' => '{payload_str_1} + "00" + {payload_str_2} + "00" + {payload_str_3}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => '0x00',
                'card_id' => 1,
                'apdu_command_id' => 39,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            13 => 
            array (
                'id' => 14,
                'component' => '{payload_str_1} + "00" + {payload_str_2} + "00" + {payload_str_3}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => '0x00',
                'card_id' => 1,
                'apdu_command_id' => 40,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            14 => 
            array (
                'id' => 15,
                'component' => '{payload_str_1} + "00" + {payload_str_2} + "00" + {payload_str_3}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => '0x00',
                'card_id' => 1,
                'apdu_command_id' => 41,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            15 => 
            array (
                'id' => 16,
                'component' => '"2F 7E" + {name} + {exposure_time} + {type} + {hash} + {payload} + {online} + {digits_display} + {digits_token} + {digits_reader} + {key} + {counter}',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 42,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            16 => 
            array (
                'id' => 17,
                'component' => '"2F 7E" + {name} + {exposure_time} + {type} + {hash} + {payload} + {online} + {digits_display} + {digits_token} + {digits_reader} + {key} + {counter}',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 43,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            17 => 
            array (
                'id' => 18,
                'component' => '"2F 7E" + {name} + {exposure_time} + {type} + {hash} + {payload} + {online} + {digits_display} + {digits_token} + {digits_reader} + {key} + {counter}',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 44,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            18 => 
            array (
                'id' => 19,
                'component' => '"2F 7E" + {name} + {exposure_time} + {type} + {hash} + {payload} + {online} + {digits_display} + {digits_token} + {digits_reader} + {key} + {counter}',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 45,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            19 => 
            array (
                'id' => 20,
                'component' => '"2F 7E" + {name} + {exposure_time} + {type} + {hash} + {payload} + {online} + {digits_display} + {digits_token} + {digits_reader} + {key} + {counter}',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 46,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            20 => 
            array (
                'id' => 21,
                'component' => '"2F 7E" + {name} + {exposure_time} + {type} + {hash} + {payload} + {online} + {digits_display} + {digits_token} + {digits_reader} + {key} + {counter}',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 47,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            21 => 
            array (
                'id' => 22,
                'component' => '"2F 7E" + {name} + {exposure_time} + {type} + {hash} + {payload} + {online} + {digits_display} + {digits_token} + {digits_reader} + {key} + {counter}',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 48,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            22 => 
            array (
                'id' => 23,
                'component' => '"2F 7E" + {name} + {exposure_time} + {type} + {hash} + {payload} + {online} + {digits_display} + {digits_token} + {digits_reader} + {key} + {counter}',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 49,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            23 => 
            array (
                'id' => 24,
                'component' => '"2F 7E" + {name} + {exposure_time} + {type} + {hash} + {payload} + {online} + {digits_display} + {digits_token} + {digits_reader} + {key} + {counter}',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 50,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            24 => 
            array (
                'id' => 25,
                'component' => '"2F 7E" + {name} + {exposure_time} + {type} + {hash} + {payload} + {online} + {digits_display} + {digits_token} + {digits_reader} + {key} + {counter}',
                'lenght' => 0,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 51,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            25 => 
            array (
                'id' => 26,
                'component' => '{userinfo}',
                'lenght' => 50,
                'leftPadding' => NULL,
                'rightPadding' => '0x00',
                'card_id' => 1,
                'apdu_command_id' => 53,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            26 => 
            array (
                'id' => 27,
                'component' => '{image_chunk_0}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 77,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            27 => 
            array (
                'id' => 28,
                'component' => '{image_chunk_1}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 78,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            28 => 
            array (
                'id' => 29,
                'component' => '{image_chunk_2}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 79,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            29 => 
            array (
                'id' => 30,
                'component' => '{image_chunk_3}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 80,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            30 => 
            array (
                'id' => 31,
                'component' => '{image_chunk_4}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 81,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            31 => 
            array (
                'id' => 32,
                'component' => '{image_chunk_5}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 82,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            32 => 
            array (
                'id' => 33,
                'component' => '{image_chunk_6}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 83,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            33 => 
            array (
                'id' => 34,
                'component' => '{image_chunk_7}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 84,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            34 => 
            array (
                'id' => 35,
                'component' => '{image_chunk_8}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 85,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            35 => 
            array (
                'id' => 36,
                'component' => '{image_chunk_9}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 86,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            36 => 
            array (
                'id' => 37,
                'component' => '{image_chunk_10}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 87,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            37 => 
            array (
                'id' => 38,
                'component' => '{image_chunk_11}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 88,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            38 => 
            array (
                'id' => 39,
                'component' => '{image_chunk_12}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 89,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            39 => 
            array (
                'id' => 40,
                'component' => '{image_chunk_13}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 90,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            40 => 
            array (
                'id' => 41,
                'component' => '{image_chunk_14}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 91,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            41 => 
            array (
                'id' => 42,
                'component' => '{image_chunk_15}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 92,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            42 => 
            array (
                'id' => 43,
                'component' => '{userdata_chunk_0}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 141,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            43 => 
            array (
                'id' => 44,
                'component' => '{userdata_chunk_1}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 142,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            44 => 
            array (
                'id' => 45,
                'component' => '{userdata_chunk_2}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 143,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            45 => 
            array (
                'id' => 46,
                'component' => '{userdata_chunk_3}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 144,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            46 => 
            array (
                'id' => 47,
                'component' => '{userdata_chunk_4}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 145,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            47 => 
            array (
                'id' => 48,
                'component' => '{userdata_chunk_5}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 146,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            48 => 
            array (
                'id' => 49,
                'component' => '{userdata_chunk_6}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 147,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            49 => 
            array (
                'id' => 50,
                'component' => '{userdata_chunk_7}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 148,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            50 => 
            array (
                'id' => 51,
                'component' => '{userdata_chunk_8}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 149,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            51 => 
            array (
                'id' => 52,
                'component' => '{userdata_chunk_9}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 150,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            52 => 
            array (
                'id' => 53,
                'component' => '{userdata_chunk_10}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 151,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            53 => 
            array (
                'id' => 54,
                'component' => '{userdata_chunk_11}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 152,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            54 => 
            array (
                'id' => 55,
                'component' => '{userdata_chunk_12}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 153,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            55 => 
            array (
                'id' => 56,
                'component' => '{userdata_chunk_13}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 154,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            56 => 
            array (
                'id' => 57,
                'component' => '{userdata_chunk_14}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 155,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            57 => 
            array (
                'id' => 58,
                'component' => '{userdata_chunk_15}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 156,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            58 => 
            array (
                'id' => 59,
                'component' => '{userdata_chunk_16}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 157,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            59 => 
            array (
                'id' => 60,
                'component' => '{userdata_chunk_17}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 158,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            60 => 
            array (
                'id' => 61,
                'component' => '{userdata_chunk_18}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 159,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            61 => 
            array (
                'id' => 62,
                'component' => '{userdata_chunk_19}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 160,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            62 => 
            array (
                'id' => 63,
                'component' => '{userdata_chunk_20}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 161,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            63 => 
            array (
                'id' => 64,
                'component' => '{userdata_chunk_21}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 162,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            64 => 
            array (
                'id' => 65,
                'component' => '{userdata_chunk_22}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 163,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            65 => 
            array (
                'id' => 66,
                'component' => '{userdata_chunk_23}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 164,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            66 => 
            array (
                'id' => 67,
                'component' => '{userdata_chunk_24}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 165,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            67 => 
            array (
                'id' => 68,
                'component' => '{userdata_chunk_25}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 166,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            68 => 
            array (
                'id' => 69,
                'component' => '{userdata_chunk_26}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 167,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            69 => 
            array (
                'id' => 70,
                'component' => '{userdata_chunk_27}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 168,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            70 => 
            array (
                'id' => 71,
                'component' => '{userdata_chunk_28}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 169,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            71 => 
            array (
                'id' => 72,
                'component' => '{userdata_chunk_29}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 170,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            72 => 
            array (
                'id' => 73,
                'component' => '{userdata_chunk_30}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 171,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            73 => 
            array (
                'id' => 74,
                'component' => '{userdata_chunk_31}',
                'lenght' => 80,
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'card_id' => 1,
                'apdu_command_id' => 172,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
        ));
        
        
    }
}