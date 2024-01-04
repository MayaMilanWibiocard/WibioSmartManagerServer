<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApduConstantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('apdu_constants')->delete();
        
        \DB::table('apdu_constants')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'factoryResetCode',
                'value' => '41 42 43 44 31 32 33 34 61 62 63 64 31 32 33 34',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'sequenceResetCode',
                'value' => 'C0 C0 66 99 FC A9 EF E2 88 19 91 91 28 08  6B 9E',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ConfigStateInitialValue',
                'value' => '00',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ConfigStateFactoryToolCardConf',
                'value' => '01',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'ConfigStateCardConfComplete',
                'value' => '02',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'ConfigStateFactoryToolAllConf',
                'value' => '03',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'ConfigStateFactoryAllConfComplete',
                'value' => '04',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'CardStateConfigMode',
                'value' => '00',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'CardStateEnrollMode',
                'value' => '01',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'CardStateVerificationMode',
                'value' => '02',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'SequenceExposureTime_1s',
                'value' => '03 E8',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'SequenceExposureTime_3s',
                'value' => '0B B8',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'SequenceExposureTime_5s',
                'value' => '13 88',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'SequenceExposureTime_7s',
                'value' => '1B 58',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'SequenceType_HOTP',
                'value' => '00',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'SequenceType_TOTP',
                'value' => '01',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'SequenceHash_SHA1',
                'value' => '00',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'SequenceHash_SHA256',
                'value' => '01',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'SequenceHash_SHA512',
                'value' => '02',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'SequencePayload_Without',
                'value' => '01',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'SequencePayload_With',
                'value' => '02',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'SequencePayload_Either',
                'value' => '03',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'SequenceOnline_Never',
                'value' => '01',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'SequenceOnline_Always',
                'value' => '02',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'SequenceOnline_Either',
                'value' => '03',
                'card_id' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
        ));
        
        
    }
}