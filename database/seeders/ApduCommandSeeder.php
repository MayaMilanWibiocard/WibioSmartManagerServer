<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ApduCommandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('apdu_constants')->truncate();
        DB::table('apdu_components')->truncate();
        DB::table('apdu_sequences')->truncate();
        DB::table('apdu_response_codes')->truncate();
        DB::table('apdu_responses')->truncate();
        DB::table('card_apdus')->truncate();
        DB::table('apdu_commands')->truncate();
        DB::table('cards')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $cardId = db::table('cards')->insertGetId([
            'ATR' => '3B-8A-80-01-53-4C-43-4F-53-20-54-3D-43-4C-0D',
            'BTL_NAME' => 'h2020',
            'card_type' => 'CardLab Agnosco',
            'card_version' => '1.3',
            'card_applet' => 'BECardOtp',
            'card_applet_version' => '16.16'
        ]);
        /*SelectBeCard*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'SelectBeCard',
            'apdu' => '00 A4 04 00 09 42 45 43 61 72 64 4F 74 70',
            'channel' => 'all',
            'requireData' => false,
            'responseType' => null,
            'timeout' => 500,
            'description' => 'Applet selection'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);
        /*WriteConfigData*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'WriteConfigData',
            'apdu' => '00 D0 00 00 37',
            'channel' => 'NFC',
            'requireData' => true,
            'responseType' => null,
            'timeout' => 10000,
            'description' => 'Write the basic applet config data',
            'crc' => 'Iso3309Crc16'
        ]);
        db::table('apdu_components')->insert([
            'component' => '"B6 86 00" + {images_per_finger} + {sequences_count} + {card_id} + [factoryResetCode] + [sequenceResetCode]',
            'card_id' => $cardId,
            'apdu_command_id' => $apduId,
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);    
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*ReadNfcToken*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ReadNfcToken',
            'apdu' => '00 B0 02 00 2D',
            'channel' => 'all',
            'requireData' => false,
            'responseType' => 'bytes',
            'timeout' => 0,
            'description' => 'Return last generated HOTP'
        ]);
        db::table('apdu_responses')->insert([
            'card_id' => $cardId,
            'apdu_command_id' => $apduId,
            'responseRules' => '{"CardId": [0, 16], "CardOtp": [15, 10], "OtpSeqId": [29, 1], "OtpCounter": [25, 4], "OtpSeqName": [30, 14]}',
            'leftPadding' => null,
            'rightPadding' => '0x00',
            'isBigEndian' => true,
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);    
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*EraseNfcToken*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'EraseNfcToken',
            'apdu' => '00 D0 03 00 00',
            'channel' => 'all',
            'requireData' => false,
            'responseType' => null,
            'timeout' => 1000,
            'description' => 'Erase last generated HOTP'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);    
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*ReadVersionInfo*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ReadVersionInfo',
            'apdu' => '00 B0 06 00 42',
            'channel' => 'all',
            'requireData' => false,
            'responseType' => 'bytes',
            'timeout' => 0,
            'description' => 'Return applet version info'
        ]);       
        db::table('apdu_responses')->insert([
            'card_id' => $cardId,
            'apdu_command_id' => $apduId,
            'responseRules' => '{"SWversion": [0, -2], "AppletVersion": [-2, 2]}',
            'leftPadding' => null,
            'rightPadding' => '0x00',
            'isBigEndian' => true,
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']); 
        /*WriteVersionInfo*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'WriteVersionInfo',
            'apdu' => '00 D0 06 00 40',
            'channel' => 'NFC',
            'requireData' => true,
            'responseType' => null,
            'timeout' => 30000,
            'description' => 'Write applet version info'
        ]);
        db::table('apdu_components')->insert([
            'component' => '{FimwareVersion[0,64], AppletVersion[64,2]}',
            'lenght' => 66,
            'card_id' => $cardId,
            'apdu_command_id' => $apduId,
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*FactoryReset*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'FactoryReset',
            'apdu' => '00 D0 08 00 10',
            'channel' => 'NFC',
            'requireData' => true,
            'responseType' => null,
            'timeout' => 30000,
            'description' => 'Reset card configuration'
        ]);
        db::table('apdu_components')->insert([
            'component' => '[factoryResetCode] + 41 42 43 44 31 32 33 34 61 62 63 64 31 32 33 34',
            'card_id' => $cardId,
            'apdu_command_id' => $apduId,
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*ReadRsaPub*****************************/
        for ($i = 0; $i<2; $i++)
        {
            $apduId = db::table('apdu_commands')->insertGetId([
                'name' => 'ReadRsaPub_'.$i,
                'apdu' => '00 B0 0A 0'.$i.' 80',
                'channel' => 'all',
                'requireData' => false,
                'responseType' => 'string_chunk',
                'timeout' => 0,
                'description' => 'Return the public key chunk '.$i
            ]);
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);
            db::table('apdu_responses')->insert([
                'card_id' => $cardId,
                'apdu_command_id' => $apduId,
                'responseRules' => '{"RsaPub_'.$i.'": []}',
                'leftPadding' => null,
                'rightPadding' => null,
                'isBigEndian' => true,
            ]); 
        }
        /*WriteEncryptedSequenceKey*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'WriteEncryptedSequenceKey',
            'apdu' => '00 B0 08 00 0F',
            'channel' => 'NFC',
            'requireData' => true,
            'responseType' => null,
            'timeout' => 5000,
            'description' => 'write OTP secret key, RSA encrypted'
        ]);
        db::table('apdu_components')->insert([
            'component' => '{otp_secret_key}',
            'card_id' => $cardId,
            'apdu_command_id' => $apduId,
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*WriteEncryptedResetCode*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'WriteEncryptedResetCode',
            'apdu' => '00 D0 0E 00 80',
            'channel' => 'NFC',
            'requireData' => true,
            'responseType' => null,
            'timeout' => 30000,
            'description' => 'write card factory reset, RSA encrypted'
        ]);
        db::table('apdu_components')->insert([
            'component' => '{card_factory_reset_code}',
            'card_id' => $cardId,
            'apdu_command_id' => $apduId,
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);   
        /*ReadSequenceInfo*****************************/
        for ($i = 0; $i<10; $i++)
        {
            $apduId = db::table('apdu_commands')->insertGetId([
                'name' => 'ReadSequenceInfo_'.$i,
                'apdu' => '00 B0 10 0'.$i.' 10',
                'channel' => 'all',
                'requireData' => false,
                'responseType' => 'bytes',
                'timeout' => 0,
                'description' => 'Get rules for the request sequence number '.$i
            ]);
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);
            db::table('apdu_responses')->insert([
                'card_id' => $cardId,
                'apdu_command_id' => $apduId,
                'responseRules' => '{"SequenceName": [0, 14], "ExpositionTime": [14, 2]}',
                'leftPadding' => null,
                'rightPadding' => '0x00',
                'isBigEndian' => true,
            ]); 
        }  
        /*ReadOtpToken_*****************************/
        for ($i = 0; $i<10; $i++)
        {
            $apduId = db::table('apdu_commands')->insertGetId([
                'name' => 'ReadOtpToken_'.$i,
                'apdu' => '00 B0 26 0'.$i.' 2D',
                'channel' => 'all',
                'requireData' => false,
                'responseType' => 'string',
                'timeout' => 0,
                'description' => 'Get OTP for the request sequence number '.$i
            ]);
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']); 
            db::table('apdu_responses')->insert([
                'card_id' => $cardId,
                'apdu_command_id' => $apduId,
                'responseRules' => '{"CardID": [0, 16], "CardOtp": [16, 10], "OtpMode": [26]}',
                'leftPadding' => null,
                'rightPadding' => '0x00',
                'isBigEndian' => true,
            ]);  
        }
        /*ReadOtpPayloadToken*****************************/
        for ($i = 0; $i<10; $i++)
        {
            $apduId = db::table('apdu_commands')->insertGetId([
                'name' => 'ReadOtpPayloadToken_'.$i,
                'apdu' => '00 B0 12 0'.$i.' 50',
                'channel' => 'all',
                'requireData' => true,
                'responseType' => 'bytes',
                'timeout' => 0,
                'description' => 'Get HOTP for the request sequence number '.$i.'  using the given payload'
            ]);
            db::table('apdu_components')->insert([
                'component' => '{payload_str_1} + "00" + {payload_str_2} + "00" + {payload_str_3}',
                'lenght'   => 80,       
                'rightPadding' => '0x00',
                'card_id' => $cardId,
                'apdu_command_id' => $apduId,
            ]);
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);
            db::table('apdu_responses')->insert([
                'card_id' => $cardId,
                'apdu_command_id' => $apduId,
                'responseRules' => '{"CardID": [0, 16], "CardOtp": [16, 10], "OtpMode": [26]}',
                'leftPadding' => null,
                'rightPadding' => '0x00',
                'isBigEndian' => true,
            ]);  
        }
        /*WriteSequenceInfo*****************************/
        for ($i = 0; $i<10; $i++)
        {
            $apduId = db::table('apdu_commands')->insertGetId([
                'name' => 'WriteSequenceInfo_'.$i,
                'apdu' => '00 D0 10 0'.$i.' 63',
                'channel' => 'NFC',
                'requireData' => true,
                'responseType' => null,
                'timeout' => 3000,
                'description' => 'configure '.$i.' sequence',
                'crc' => 'Iso3309Crc16'
            ]);
            db::table('apdu_components')->insert([
                'component' => '"2F 7E" + {name} + {exposure_time} + {type} + {hash} + {payload} + {online} + {digits_display} + {digits_token} + {digits_reader} + {key} + {counter}',
                'card_id' => $cardId,
                'apdu_command_id' => $apduId,
            ]);
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        }
        /*ReadUserInfo*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ReadUserInfo',
            'apdu' => '00 B0 14 00 50',
            'channel' => 'all',
            'requireData' => false,
            'responseType' => 'userInfo',
            'timeout' => 0,
            'description' => 'Get 80 bytes USER info'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        db::table('apdu_responses')->insert([
            'card_id' => $cardId,
            'apdu_command_id' => $apduId,
            'responseRules' => '{"Name": [0, ";"], "Email": [";", ";"], "ExpireDate": [";", 10]}',
            'leftPadding' => null,
            'rightPadding' => '0x00',
            'isBigEndian' => true,
        ]);   
        /*WriteUserInfo*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'WriteUserInfo',
            'apdu' => '00 D0 14 00 50',
            'channel' => 'all',
            'requireData' => true,
            'responseType' => null,
            'timeout' => 3000,
            'description' => 'Write user info where in 0x00 config state'
        ]);
        db::table('apdu_components')->insert([
            'component' => '{userinfo}',
            'lenght'   => 50,       
            'rightPadding' => '0x00',
            'card_id' => $cardId,
            'apdu_command_id' => $apduId,
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*ReadConfigState*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ReadConfigState',
            'apdu' => '00 B0 16 00 01',
            'channel' => 'all',
            'requireData' => false,
            'responseType' => 'byte',
            'timeout' => 0,
            'description' => 'Get config status'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']); 
        db::table('apdu_responses')->insert([
            'card_id' => $cardId,
            'apdu_command_id' => $apduId,
            'responseRules' => '{"Status": [0, {"values": {"0": "Not configured", "4": "Configurated", "-1": "Configuration in progress"}}]}',
            'leftPadding' => null,
            'rightPadding' => '0x00',
            'isBigEndian' => true,
        ]);   
        /*WriteConfigState*****************************/
        for ($i = 0; $i<5; $i++)
        {
            $apduId = db::table('apdu_commands')->insertGetId([
                'name' => 'WriteConfigState_'.$i,
                'apdu' => '00 D0 16 03 0'.$i,
                'channel' => 'NFC',
                'requireData' => false,
                'responseType' => null,
                'timeout' => 3000,
                'description' => 'Write config status '.$i
            ]);
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        }
        /*ReadCardState*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ReadCardState',
            'apdu' => '00 B0 18 00 01',
            'channel' => 'all',
            'requireData' => false,
            'responseType' => 'byte',
            'timeout' => 0,
            'description' => 'Write config status '.$i
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        db::table('apdu_responses')->insert([
            'card_id' => $cardId,
            'apdu_command_id' => $apduId,
            'responseRules' => '{"Status": [0, {"values": {"0": "Configuration mode", "1": "Enroll mode", "2": "verification mode"}}]}',
            'leftPadding' => null,
            'rightPadding' => '0x00',
            'isBigEndian' => true,
        ]);   
        /*ReadCardOffImage*****************************/
        for ($i = 0; $i<16; $i++)
        {
            $apduId = db::table('apdu_commands')->insertGetId([
                'name' => 'ReadCardOffImage_'.$i,
                'apdu' => '00 B0 1A '.sprintf("%02X", $i).' 50',
                'channel' => 'all',
                'requireData' => false,
                'responseType' => 'image',
                'timeout' => 0,
                'description' => 'Get the card off image block '.$i
            ]);
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        }
        /*WriteCardOffImage*****************************/
        for ($i = 0; $i<16; $i++)
        {
            $apduId = db::table('apdu_commands')->insertGetId([
                'name' => 'WriteCardOffImage_'.$i,
                'apdu' => '00 D0 1A '.sprintf("%02X", $i).' FF',
                'channel' => 'NFC',
                'requireData' => true,
                'responseType' => null,
                'timeout' => 3000,
                'description' => 'Write  the card off image block '.$i
            ]);
            db::table('apdu_components')->insert([
                'component' => '{image_chunk_'.$i.'}',
                'lenght'   => 80,       
                'card_id' => $cardId,
                'apdu_command_id' => $apduId,
            ]);
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']); 
        }
        /*WriteFpsTimeout*****************************/
        for ($i = 0; $i<4; $i++)
        {
            $apduId = db::table('apdu_commands')->insertGetId([
                'name' => 'WriteFpsTimeout_'.$i,
                'apdu' => '00 D0 24 00 03 01 00 0'.$i,
                'channel' => 'NFC',
                'requireData' => false,
                'responseType' => null,
                'timeout' => 500,
                'description' => 'Set the FPS timeout '.$i
            ]);
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        }
        /*ExecuteActivateBtl*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ExecuteActivateBtl',
            'apdu' => '00 D0 24 00 03 02 00 02',
            'channel' => 'NFC',
            'requireData' => false,
            'responseType' => null,
            'timeout' => 500,
            'description' => 'Activate bluetooth mode',
            'crc' => 'CRC32'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*ExecuteActivateOnline*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ExecuteActivateOnline',
            'apdu' => '00 D0 24 00 03 02 00 01',
            'channel' => 'BTL',
            'requireData' => false,
            'responseType' => null,
            'timeout' => 500,
            'description' => 'Activate online mode',
            'crc' => 'CRC32'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);   
        /*ExecutePowerOff*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ExecutePowerOff',
            'apdu' => '00 D0 24 00 03 03 00 01',
            'channel' => 'all',
            'requireData' => false,
            'responseType' => null,
            'timeout' => 500,
            'description' => 'Power off the card'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*ExecuteAddInfo*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ExecuteAddInfo',
            'apdu' => '00 D0 24 00 03 04 00 01',
            'channel' => 'all',
            'requireData' => false,
            'responseType' => null,
            'timeout' => 500,
            'description' => 'Adds sequence counter, battery level to card display'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*ExecuteLedIntensity*****************************/
        for ($i = 0; $i<2; $i++)
        {
            $apduId = db::table('apdu_commands')->insertGetId([
                'name' => 'ExecuteLedIntensity_'.$i,
                'apdu' => '00 D0 24 00 03 05 00 0'.$i,
                'channel' => 'all',
                'requireData' => false,
                'responseType' => null,
                'timeout' => 500,
                'description' => 'Set the led intensity to '.$i
            ]);
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        } 
        /*ExecuteSelfTest*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ExecuteSelfTest',
            'apdu' => '00 D0 24 00 03 06 00 01',
            'channel' => 'all',
            'requireData' => false,
            'responseType' => null,
            'timeout' => 500,
            'description' => 'Execute internal self test'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*ExecuteBootLoader*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ExecuteBootLoader',
            'apdu' => '00 D0 24 00 03 07 00 01',
            'channel' => 'NFC',
            'requireData' => false,
            'responseType' => null,
            'timeout' => 500,
            'description' => 'Put the card in bluetooth mode recognized as CARDLAB OTA'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']); 
        /*ExecuteMcuReset*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ExecuteMcuReset',
            'apdu' => '00 D0 24 00 03 08 00 01',
            'channel' => 'NFC',
            'requireData' => false,
            'responseType' => null,
            'timeout' => 1500,
            'description' => 'Reset MCU'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*ExecuteActivateCharge*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ExecuteActivateCharge',
            'apdu' => '00 D0 24 00 03 09 00 01',
            'channel' => 'NFC',
            'requireData' => false,
            'responseType' => null,
            'timeout' => 300,
            'description' => 'Power off the card and activare nfc charging mode'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);   
        /*ExecuteSnap*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ExecuteSnap',
            'apdu' => '00 D0 24 00 03 0A 00 01',
            'channel' => 'NFC',
            'requireData' => false,
            'responseType' => null,
            'timeout' => 300,
            'description' => 'Snap the card'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*ReadBatteryLevel*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'ReadBatteryLevel',
            'apdu' => '00 B0 28 00 04',
            'channel' => 'all',
            'requireData' => false,
            'responseType' => 'double_int',
            'timeout' => 300,
            'description' => 'Get battery status informations'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        db::table('apdu_responses')->insert([
            'card_id' => $cardId,
            'apdu_command_id' => $apduId,
            'responseRules' => '{"Vaultage": [0], "Percentage": [1]}',
            'leftPadding' => null,
            'rightPadding' => null,
            'isBigEndian' => true,
        ]);   
        /*Read4kUserData*****************************/
        for ($i = 0; $i<32; $i++)
        {
            $apduId = db::table('apdu_commands')->insertGetId([
                'name' => 'Read4kUserData_'.$i,
                'apdu' => '00 B0 2A '.sprintf("%02X", $i).' 80',
                'channel' => 'all',
                'requireData' => false,
                'responseType' => 'userData',
                'timeout' => 500,
                'description' => 'Read 4k user data by chunk '.$i
            ]);
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        }  
        db::table('apdu_responses')->insert([
            'card_id' => $cardId,
            'apdu_command_id' => $apduId,
            'responseRules' => '{"UserData": []}',
            'leftPadding' => null,
            'rightPadding' => null,
            'isBigEndian' => true,
        ]);   
        /*Write4kUserData*****************************/
        for ($i = 0; $i<32; $i++)
        {
            $apduId = db::table('apdu_commands')->insertGetId([
                'name' => 'Write4kUserData_'.$i,
                'apdu' => '00 D0 2A '.sprintf("%02X", $i).' 80',
                'channel' => 'NFC',
                'requireData' => true,
                'responseType' => null,
                'timeout' => 1500,
                'description' => 'Write 4k user data by chunk '.$i,
                'crc' => 'Iso3309Crc16'
            ]);
            db::table('apdu_components')->insert([
                'component' => '{userdata_chunk_'.$i.'}',
                'lenght'   => 80,       
                'card_id' => $cardId,
                'apdu_command_id' => $apduId,
            ]);
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        } 
        /*BtlEnroll*****************************/
        for ($i = 0; $i<2; $i++)
        {
            $apduId = db::table('apdu_commands')->insertGetId([
                'name' => 'BtlEnroll'.$i,
                'apdu' => '00 E0 '.sprintf("%02X", $i).' 00',
                'channel' => 'BTL',
                'requireData' => false,
                'responseType' => 'bytes',
                'timeout' => 1000,
                'description' => 'Start or continue enroll fingerprint for finger '.$i,
                'crc' => 'CRC32'
            ]);
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
            db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
            db::table('apdu_responses')->insert([
                'card_id' => $cardId,
                'apdu_command_id' => $apduId,
                'responseRules' => '{"FingerId": [1], "FingerRemaining": [0]}',
                'leftPadding' => null,
                'rightPadding' => null,
                'isBigEndian' => true,
            ]);   
        }  
        /*BtlPowerOnSE*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'BtlPowerOnSE',
            'apdu' => '00 E0 05 00',
            'channel' => 'BTL',
            'requireData' => false,
            'responseType' => null,
            'timeout' => 1500,
            'description' => 'Blueooth power on secure element',
            'crc' => 'CRC32'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /*BtlPowerOffSE*****************************/
        $apduId = db::table('apdu_commands')->insertGetId([
            'name' => 'BtlPowerOffSE',
            'apdu' => '00 E0 06 00',
            'channel' => 'BTL',
            'requireData' => false,
            'responseType' => null,
            'timeout' => 1000,
            'description' => 'Blueooth power off secure element',
            'crc' => 'CRC32'
        ]);
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'NFC', 'crc' => '']);  
        db::table('card_apdus')->insert(['card_id' => $cardId,'apdu_command_id' => $apduId, 'channel' => 'BTL', 'crc' => 'CRC32']);  
        /************************************************************************************************************************/
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6200', 'responseText' => "No information given(NV-Ram not changed)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6201', 'responseText' => "NV-Ram not changed 1."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6281', 'responseText' => "Part of returned data may be corrupted"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6282', 'responseText' => "End of file/ record reached before reading Le bytes"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6283', 'responseText' => "Selected file invalidated"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6284', 'responseText' => "Selected file is not valid.FCI not formated according to ISO"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6285', 'responseText' => "No input data available from a sensor on the card.No Purse Engine enslaved for R3bc"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '62A2', 'responseText' => "Wrong R - MAC"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '62A4', 'responseText' => "Card locked(during reset())"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '62F1', 'responseText' => "Wrong C - MAC"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '62F3', 'responseText' => "Internal reset"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '62F5', 'responseText' => "Default agent locked"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '62F7', 'responseText' => "Cardholder locked"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '62F8', 'responseText' => "Basement is current agent"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '62F9', 'responseText' => "CALC Key Set not unblocked"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6300', 'responseText' => "No information given(NV-Ram changed)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6381', 'responseText' => "File filled up by the last write. Loading / updating is not allowed."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6382', 'responseText' => "Card key not supported."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6383', 'responseText' => "Reader key not supported."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6384', 'responseText' => "Plaintext transmission not supported."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6385', 'responseText' => "Secured transmission not supported."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6386', 'responseText' => "Volatile memory is not available."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6387', 'responseText' => "Non-volatile memory is not available."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6388', 'responseText' => "Key number not valid."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6389', 'responseText' => "Key length is not correct."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '63C0', 'responseText' => "Verify fail, no try left."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '63C1', 'responseText' => "Verify fail, 1 try left."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '63C2', 'responseText' => "Verify fail, 2 tries left."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '63C3', 'responseText' => "Verify fail, 3 tries left."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '63CX', 'responseText' => "The counter has reached the value ‘x’ (0 = x = 15)(command dependent)."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '63F1', 'responseText' => "More data expected."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '63F2', 'responseText' => "More data expected and proactive command pending."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6400', 'responseText' => "No information given(NV-Ram not changed)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6401', 'responseText' => "Command timeout.Immediate response required by the card."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6500', 'responseText' => "No information given"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6501', 'responseText' => "Write error.Memory failure. There have been problems in writing or reading the EEPROM.Other hardware problems may also bring this error."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6581', 'responseText' => "Memory failure"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6600', 'responseText' => "Error while receiving(timeout)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6601', 'responseText' => "Error while receiving(character parity error)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6602', 'responseText' => "Wrong checksum"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6603', 'responseText' => "The current DF file without FCI"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6604', 'responseText' => "No SF or KF under the current DF"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6669', 'responseText' => "Incorrect Encryption / Decryption Padding"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6700', 'responseText' => "Wrong length"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6800', 'responseText' => "No information given(The request function is not supported by the card)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6881', 'responseText' => "Logical channel not supported"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6882', 'responseText' => "Secure messaging not supported"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6883', 'responseText' => "Last command of the chain expected"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6884', 'responseText' => "Command chaining not supported"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6900', 'responseText' => "No information given(Command not allowed)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6901', 'responseText' => "Command not accepted(inactive state)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6981', 'responseText' => "Command incompatible with file structure"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6982', 'responseText' => "Security condition not satisfied."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6983', 'responseText' => "Authentication method blocked"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6984', 'responseText' => "Referenced data reversibly blocked(invalidated)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6985', 'responseText' => "Conditions of use not satisfied."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6986', 'responseText' => "Command not allowed(no current EF)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6987', 'responseText' => "Expected secure messaging(SM) object missing"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6988', 'responseText' => "Incorrect secure messaging(SM) data object"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '698D', 'responseText' => "Reserved"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6996', 'responseText' => "Data must be updated again"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '69E1', 'responseText' => "POL1 of the currently Enabled Profile prevents this action."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '69F0', 'responseText' => "Permission Denied"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '69F1', 'responseText' => "Permission Denied – Missing Privilege"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6A00', 'responseText' => "No information given(Bytes P1 and/ or P2 are incorrect)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6A80', 'responseText' => "The parameters in the data field are incorrect."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6A81', 'responseText' => "Function not supported"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6A82', 'responseText' => "File not found"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6A83', 'responseText' => "Record not found"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6A84', 'responseText' => "There is insufficient memory space in record or file"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6A85', 'responseText' => "Lc inconsistent with TLV structure"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6A86', 'responseText' => "Incorrect P1 or P2 parameter."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6A87', 'responseText' => "Lc inconsistent with P1 - P2"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6A88', 'responseText' => "Referenced data not found"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6A89', 'responseText' => "File already exists"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6A8A', 'responseText' => "DF name already exists."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6B00', 'responseText' => "Wrong parameter(s) P1 - P2"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6C00', 'responseText' => "Incorrect P3 length."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6D00', 'responseText' => "Instruction code not supported or invalid"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6E00', 'responseText' => "Class not supported"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6F00', 'responseText' => "Command aborted – more exact diagnosis not possible(e.g., operating system error)."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '6FFF', 'responseText' => "Card dead(overuse, …)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9000', 'responseText' => "Command successfully executed(OK)."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9004', 'responseText' => "PIN not succesfully verified, 3 or more PIN tries left"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9008', 'responseText' => "Key/file not found"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9080', 'responseText' => "Unblock Try Counter has reached zero"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9100', 'responseText' => "OK"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9101', 'responseText' => "States.activity, States.lock Status or States.lockable has wrong value"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9102', 'responseText' => "Transaction number reached its limit"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '910C', 'responseText' => "No changes"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '910E', 'responseText' => "Insufficient NV-Memory to complete command"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '911C', 'responseText' => "Command code not supported"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '911E', 'responseText' => "CRC or MAC does not match data"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9140', 'responseText' => "Invalid key number specified"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '917E', 'responseText' => "Length of command string invalid"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '919D', 'responseText' => "Not allow the requested command"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '919E', 'responseText' => "Value of the parameter invalid"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '91A0', 'responseText' => "Requested AID not present on PICC"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '91A1', 'responseText' => "Unrecoverable error within application"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '91AE', 'responseText' => "Authentication status does not allow the requested command"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '91AF', 'responseText' => "Additional data frame is expected to be sent"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '91BE', 'responseText' => "Out of boundary"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '91C1', 'responseText' => "Unrecoverable error within PICC"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '91CA', 'responseText' => "Previous Command was not fully completed"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '91CD', 'responseText' => "PICC was disabled by an unrecoverable error"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '91CE', 'responseText' => "Number of Applications limited to 28"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '91DE', 'responseText' => "File or application already exists"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '91EE', 'responseText' => "Could not complete NV-write operation due to loss of power"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '91F0', 'responseText' => "Specified file number does not exist"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '91F1', 'responseText' => "Unrecoverable error within file"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9210', 'responseText' => "Insufficient memory.No more storage available."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9240', 'responseText' => "Writing to EEPROM not successful."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9301', 'responseText' => "Integrity error"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9302', 'responseText' => "Candidate S2 invalid"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9303', 'responseText' => "Application is permanently locked"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9400', 'responseText' => "No EF selected."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9401', 'responseText' => "Candidate currency code does not match purse currency"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9402', 'responseText' => "Candidate amount too high"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9402', 'responseText' => "Address range exceeded."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9403', 'responseText' => "Candidate amount too low"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9404', 'responseText' => "FID not found, record not found or comparison pattern not found."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9405', 'responseText' => "Problems in the data field"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9406', 'responseText' => "Required MAC unavailable"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9407', 'responseText' => "Bad currency : purse engine has no slot with R3bc currency"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9408', 'responseText' => "R3bc currency not supported in purse engine"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9408', 'responseText' => "Selected file type does not match command."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9580', 'responseText' => "Bad sequence"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9681', 'responseText' => "Slave not found"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9700', 'responseText' => "PIN blocked and Unblock Try Counter is 1 or 2"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9702', 'responseText' => "Main keys are blocked"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9704', 'responseText' => "PIN not succesfully verified, 3 or more PIN tries left"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9784', 'responseText' => "Base key"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9785', 'responseText' => "Limit exceeded – C-MAC key"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9786', 'responseText' => "SM error – Limit exceeded – R-MAC key"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9787', 'responseText' => "Limit exceeded – sequence counter"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9788', 'responseText' => "Limit exceeded – R-MAC length"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9789', 'responseText' => "Service not available"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9802', 'responseText' => "No PIN defined."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9804', 'responseText' => "Access conditions not satisfied, authentication failed."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9835', 'responseText' => "ASK RANDOM or GIVE RANDOM not executed."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9840', 'responseText' => "PIN verification not successful."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9850', 'responseText' => "INCREASE or DECREASE could not be executed because a limit has been reached."]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9862', 'responseText' => "Authentication Error, application specific (incorrect MAC)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9900', 'responseText' => "1 PIN try left"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9904', 'responseText' => "PIN not succesfully verified, 1 PIN try left"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9985', 'responseText' => "Wrong status – Cardholder lock"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9986', 'responseText' => "Missing privilege"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9987', 'responseText' => "PIN is not installed"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9988', 'responseText' => "Wrong status – R-MAC state"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9A00', 'responseText' => "2 PIN try left"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9A04', 'responseText' => "PIN not succesfully verified, 2 PIN try left"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9A71', 'responseText' => "Wrong parameter value – Double agent AID"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9A72', 'responseText' => "Wrong parameter value – Double agent Type"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D05', 'responseText' => "Incorrect certificate type"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D07', 'responseText' => "Incorrect session data size"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D08', 'responseText' => "Incorrect DIR file record size"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D09', 'responseText' => "Incorrect FCI record size"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D0A', 'responseText' => "Incorrect code size"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D10', 'responseText' => "Insufficient memory to load application"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D11', 'responseText' => "Invalid AID"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D12', 'responseText' => "Duplicate AID"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D13', 'responseText' => "Application previously loaded"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D14', 'responseText' => "Application history list full"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D15', 'responseText' => "Application not open"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D17', 'responseText' => "Invalid offset"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D18', 'responseText' => "Application already loaded"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D19', 'responseText' => "Invalid certificate"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D1A', 'responseText' => "Invalid signature"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D1B', 'responseText' => "Invalid KTU"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D1D', 'responseText' => "MSM controls not set"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D1E', 'responseText' => "Application signature does not exist"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D1F', 'responseText' => "KTU does not exist"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D20', 'responseText' => "Application not loaded"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D21', 'responseText' => "Invalid Open command data length"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D30', 'responseText' => "Check data parameter is incorrect (invalid start address)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D31', 'responseText' => "Check data parameter is incorrect(invalid length)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D32', 'responseText' => "Check data parameter is incorrect(illegal memory check area)"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D40', 'responseText' => "Invalid MSM Controls ciphertext"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D41', 'responseText' => "MSM controls already set"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D42', 'responseText' => "Set MSM Controls data length less than 2 bytes"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D43', 'responseText' => "Invalid MSM Controls data length"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D44', 'responseText' => "Excess MSM Controls ciphertext"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D45', 'responseText' => "Verification of MSM Controls data failed"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D50', 'responseText' => "Invalid MCD Issuer production ID"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D51', 'responseText' => "Invalid MCD Issuer ID"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D52', 'responseText' => "Invalid set MSM controls data date"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D53', 'responseText' => "Invalid MCD number"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D54', 'responseText' => "Reserved field error"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D55', 'responseText' => "Reserved field error"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D56', 'responseText' => "Reserved field error"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D57', 'responseText' => "Reserved field error"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D60', 'responseText' => "MAC verification failed"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D61', 'responseText' => "Maximum number of unblocks reached"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D62', 'responseText' => "Card was not blocked"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D63', 'responseText' => "Crypto functions not available"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9D64', 'responseText' => "No application loaded"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9E00', 'responseText' => "PIN not installed"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9E04', 'responseText' => "PIN not succesfully verified, PIN not installed"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9F00', 'responseText' => "PIN blocked and Unblock Try Counter is 3"]);
        db::table('apdu_response_codes')->insert(['card_id' => 0, 'responseCode' => '9F04', 'responseText' => "PIN not succesfully verified, PIN blocked and Unblock Try Counter is 3"]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => 'CA00', 'responseText' => "Wrong internal reply MCU"]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => 'CA08', 'responseText' => "Special case, battery level out of range"]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => 'CA00', 'responseText' => "Wrong internal reply MCU"]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => 'CA01', 'responseText' => "Wrong receive length from MCU"]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => 'CAD1', 'responseText' => "Javacard OS, exception, MCU interface"]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => '0000', 'responseText' => "Null response"]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => '0001', 'responseText' => "System failure"]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => '0002', 'responseText' => "Response size(of one chunk) is larger than 512 byte "]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => '0003', 'responseText' => "Time out (chunks receiving loop) -> max time = 1 sec "]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => '0004', 'responseText' => "Time out (wait for interrupt) -> max time = 1 sec "]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => '0005', 'responseText' => "Wrong EOT(end of transmission) from get version "]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => '0006', 'responseText' => "Too big response(when all response size is bigger than 10k byte)"]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => '0007', 'responseText' => "read interrupt response is not 0x0001"]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => '0008', 'responseText' => "Wrong EOT from get config"]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => '5000', 'responseText' => "Flash error"]);
        db::table('apdu_response_codes')->insert(['card_id' => $cardId, 'responseCode' => '806A', 'responseText' => "Timeout fingerprint not recognition"]);    
   
        /************************************************************************************************************************/
        db::table('apdu_sequences')->insert([
            'sequence' => 'InitiateApplicationSelection',
            'card_id' => $cardId,
            'channel' => 'NFC',
            'apdu_command_id' => 1,
            'order_of_execution' => 1
        ]);
        db::table('apdu_sequences')->insert([
            'sequence' => 'GetCardData',
            'card_id' => $cardId,
            'channel' => 'NFC',
            'apdu_command_id' => 108,
            'order_of_execution' => 2
        ]);
        db::table('apdu_sequences')->insert([
            'sequence' => 'GetCardData',
            'card_id' => $cardId,
            'channel' => 'NFC',
            'apdu_command_id' => 60,
            'order_of_execution' => 3
        ]);
        db::table('apdu_sequences')->insert([
            'sequence' => 'GetCardData',
            'card_id' => $cardId,
            'channel' => 'NFC',
            'apdu_command_id' => 3,
            'order_of_execution' => 4
        ]);
        db::table('apdu_sequences')->insert([
            'sequence' => 'GetCardData',
            'card_id' => $cardId,
            'channel' => 'NFC',
            'apdu_command_id' => 52,
            'order_of_execution' => 5
        ]);

        /************************************************************************************************************************/
        db::table('apdu_sequences')->insert([
            'sequence' => 'InitiateApplicationSelection',
            'card_id' => $cardId,
            'channel' => 'BTL',
            'apdu_command_id' => 175,
            'order_of_execution' => 1
        ]);
        db::table('apdu_sequences')->insert([
            'sequence' => 'InitiateApplicationSelection',
            'card_id' => $cardId,
            'channel' => 'BTL',
            'apdu_command_id' => 1,
            'order_of_execution' => 2
        ]);
        db::table('apdu_sequences')->insert([
            'sequence' => 'GetCardData',
            'card_id' => $cardId,
            'channel' => 'BTL',
            'apdu_command_id' => 108,
            'order_of_execution' => 3
        ]);
        db::table('apdu_sequences')->insert([
            'sequence' => 'GetCardData',
            'card_id' => $cardId,
            'channel' => 'BTL',
            'apdu_command_id' => 60,
            'order_of_execution' => 4
        ]);
        db::table('apdu_sequences')->insert([
            'sequence' => 'GetCardData',
            'card_id' => $cardId,
            'channel' => 'BTL',
            'apdu_command_id' => 3,
            'order_of_execution' => 5
        ]);
        db::table('apdu_sequences')->insert([
            'sequence' => 'GetCardData',
            'card_id' => $cardId,
            'channel' => 'BTL',
            'apdu_command_id' => 52,
            'order_of_execution' => 6
        ]);

        db::table('apdu_sequences')->insert([
            'sequence' => 'CloseApplicationSelection',
            'card_id' => $cardId,
            'channel' => 'BTL',
            'apdu_command_id' => 176,
            'order_of_execution' => 1
        ]);

        /************************************************************************************************************************/
        db::table('apdu_constants')->insert(['name' => 'factoryResetCode', 'value' => '41 42 43 44 31 32 33 34 61 62 63 64 31 32 33 34', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'sequenceResetCode', 'value' => 'C0 C0 66 99 FC A9 EF E2 88 19 91 91 28 08  6B 9E', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'ConfigStateInitialValue', 'value' => '00', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'ConfigStateFactoryToolCardConf', 'value' => '01', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'ConfigStateCardConfComplete', 'value' => '02', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'ConfigStateFactoryToolAllConf', 'value' => '03', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'ConfigStateFactoryAllConfComplete', 'value' => '04', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'CardStateConfigMode', 'value' => '00', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'CardStateEnrollMode', 'value' => '01', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'CardStateVerificationMode', 'value' => '02', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequenceExposureTime_1s', 'value' => '03 E8', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequenceExposureTime_3s', 'value' => '0B B8', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequenceExposureTime_5s', 'value' => '13 88', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequenceExposureTime_7s', 'value' => '1B 58', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequenceType_HOTP', 'value' => '00', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequenceType_TOTP', 'value' => '01', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequenceHash_SHA1', 'value' => '00', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequenceHash_SHA256', 'value' => '01', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequenceHash_SHA512', 'value' => '02', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequencePayload_Without', 'value' => '01', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequencePayload_With', 'value' => '02', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequencePayload_Either', 'value' => '03', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequenceOnline_Never', 'value' => '01', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequenceOnline_Always', 'value' => '02', 'card_id' => $cardId]);
        db::table('apdu_constants')->insert(['name' => 'SequenceOnline_Either', 'value' => '03', 'card_id' => $cardId]);

        $createdDate = clone(Carbon::now());
        DB::table('apdu_constants')->update(['created_at' => $createdDate, 'updated_at' => $createdDate]);
        DB::table('apdu_components')->update(['created_at' => $createdDate, 'updated_at' => $createdDate]);
        DB::table('apdu_sequences')->update(['created_at' => $createdDate, 'updated_at' => $createdDate]);
        DB::table('apdu_response_codes')->update(['created_at' => $createdDate, 'updated_at' => $createdDate]);
        DB::table('apdu_responses')->update(['created_at' => $createdDate, 'updated_at' => $createdDate]);
        DB::table('card_apdus')->update(['created_at' => $createdDate, 'updated_at' => $createdDate]);
        DB::table('apdu_commands')->update(['created_at' => $createdDate, 'updated_at' => $createdDate]);
        DB::table('cards')->update(['created_at' => $createdDate, 'updated_at' => $createdDate]);
    }
}
