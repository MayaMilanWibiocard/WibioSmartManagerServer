<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApduResponseCodesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('apdu_response_codes')->delete();
        
        \DB::table('apdu_response_codes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'card_id' => 0,
                'responseCode' => '6200',
            'responseText' => 'No information given(NV-Ram not changed)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            1 => 
            array (
                'id' => 2,
                'card_id' => 0,
                'responseCode' => '6201',
                'responseText' => 'NV-Ram not changed 1.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            2 => 
            array (
                'id' => 3,
                'card_id' => 0,
                'responseCode' => '6281',
                'responseText' => 'Part of returned data may be corrupted',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            3 => 
            array (
                'id' => 4,
                'card_id' => 0,
                'responseCode' => '6282',
                'responseText' => 'End of file/ record reached before reading Le bytes',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            4 => 
            array (
                'id' => 5,
                'card_id' => 0,
                'responseCode' => '6283',
                'responseText' => 'Selected file invalidated',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            5 => 
            array (
                'id' => 6,
                'card_id' => 0,
                'responseCode' => '6284',
                'responseText' => 'Selected file is not valid.FCI not formated according to ISO',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            6 => 
            array (
                'id' => 7,
                'card_id' => 0,
                'responseCode' => '6285',
                'responseText' => 'No input data available from a sensor on the card.No Purse Engine enslaved for R3bc',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            7 => 
            array (
                'id' => 8,
                'card_id' => 0,
                'responseCode' => '62A2',
                'responseText' => 'Wrong R - MAC',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            8 => 
            array (
                'id' => 9,
                'card_id' => 0,
                'responseCode' => '62A4',
            'responseText' => 'Card locked(during reset())',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            9 => 
            array (
                'id' => 10,
                'card_id' => 0,
                'responseCode' => '62F1',
                'responseText' => 'Wrong C - MAC',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            10 => 
            array (
                'id' => 11,
                'card_id' => 0,
                'responseCode' => '62F3',
                'responseText' => 'Internal reset',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            11 => 
            array (
                'id' => 12,
                'card_id' => 0,
                'responseCode' => '62F5',
                'responseText' => 'Default agent locked',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            12 => 
            array (
                'id' => 13,
                'card_id' => 0,
                'responseCode' => '62F7',
                'responseText' => 'Cardholder locked',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            13 => 
            array (
                'id' => 14,
                'card_id' => 0,
                'responseCode' => '62F8',
                'responseText' => 'Basement is current agent',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            14 => 
            array (
                'id' => 15,
                'card_id' => 0,
                'responseCode' => '62F9',
                'responseText' => 'CALC Key Set not unblocked',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            15 => 
            array (
                'id' => 16,
                'card_id' => 0,
                'responseCode' => '6300',
            'responseText' => 'No information given(NV-Ram changed)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            16 => 
            array (
                'id' => 17,
                'card_id' => 0,
                'responseCode' => '6381',
                'responseText' => 'File filled up by the last write. Loading / updating is not allowed.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            17 => 
            array (
                'id' => 18,
                'card_id' => 0,
                'responseCode' => '6382',
                'responseText' => 'Card key not supported.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            18 => 
            array (
                'id' => 19,
                'card_id' => 0,
                'responseCode' => '6383',
                'responseText' => 'Reader key not supported.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            19 => 
            array (
                'id' => 20,
                'card_id' => 0,
                'responseCode' => '6384',
                'responseText' => 'Plaintext transmission not supported.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            20 => 
            array (
                'id' => 21,
                'card_id' => 0,
                'responseCode' => '6385',
                'responseText' => 'Secured transmission not supported.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            21 => 
            array (
                'id' => 22,
                'card_id' => 0,
                'responseCode' => '6386',
                'responseText' => 'Volatile memory is not available.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            22 => 
            array (
                'id' => 23,
                'card_id' => 0,
                'responseCode' => '6387',
                'responseText' => 'Non-volatile memory is not available.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            23 => 
            array (
                'id' => 24,
                'card_id' => 0,
                'responseCode' => '6388',
                'responseText' => 'Key number not valid.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            24 => 
            array (
                'id' => 25,
                'card_id' => 0,
                'responseCode' => '6389',
                'responseText' => 'Key length is not correct.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            25 => 
            array (
                'id' => 26,
                'card_id' => 0,
                'responseCode' => '63C0',
                'responseText' => 'Verify fail, no try left.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            26 => 
            array (
                'id' => 27,
                'card_id' => 0,
                'responseCode' => '63C1',
                'responseText' => 'Verify fail, 1 try left.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            27 => 
            array (
                'id' => 28,
                'card_id' => 0,
                'responseCode' => '63C2',
                'responseText' => 'Verify fail, 2 tries left.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            28 => 
            array (
                'id' => 29,
                'card_id' => 0,
                'responseCode' => '63C3',
                'responseText' => 'Verify fail, 3 tries left.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            29 => 
            array (
                'id' => 30,
                'card_id' => 0,
                'responseCode' => '63CX',
            'responseText' => 'The counter has reached the value ‘x’ (0 = x = 15)(command dependent).',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            30 => 
            array (
                'id' => 31,
                'card_id' => 0,
                'responseCode' => '63F1',
                'responseText' => 'More data expected.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            31 => 
            array (
                'id' => 32,
                'card_id' => 0,
                'responseCode' => '63F2',
                'responseText' => 'More data expected and proactive command pending.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            32 => 
            array (
                'id' => 33,
                'card_id' => 0,
                'responseCode' => '6400',
            'responseText' => 'No information given(NV-Ram not changed)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            33 => 
            array (
                'id' => 34,
                'card_id' => 0,
                'responseCode' => '6401',
                'responseText' => 'Command timeout.Immediate response required by the card.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            34 => 
            array (
                'id' => 35,
                'card_id' => 0,
                'responseCode' => '6500',
                'responseText' => 'No information given',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            35 => 
            array (
                'id' => 36,
                'card_id' => 0,
                'responseCode' => '6501',
                'responseText' => 'Write error.Memory failure. There have been problems in writing or reading the EEPROM.Other hardware problems may also bring this error.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            36 => 
            array (
                'id' => 37,
                'card_id' => 0,
                'responseCode' => '6581',
                'responseText' => 'Memory failure',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            37 => 
            array (
                'id' => 38,
                'card_id' => 0,
                'responseCode' => '6600',
            'responseText' => 'Error while receiving(timeout)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            38 => 
            array (
                'id' => 39,
                'card_id' => 0,
                'responseCode' => '6601',
            'responseText' => 'Error while receiving(character parity error)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            39 => 
            array (
                'id' => 40,
                'card_id' => 0,
                'responseCode' => '6602',
                'responseText' => 'Wrong checksum',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            40 => 
            array (
                'id' => 41,
                'card_id' => 0,
                'responseCode' => '6603',
                'responseText' => 'The current DF file without FCI',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            41 => 
            array (
                'id' => 42,
                'card_id' => 0,
                'responseCode' => '6604',
                'responseText' => 'No SF or KF under the current DF',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            42 => 
            array (
                'id' => 43,
                'card_id' => 0,
                'responseCode' => '6669',
                'responseText' => 'Incorrect Encryption / Decryption Padding',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            43 => 
            array (
                'id' => 44,
                'card_id' => 0,
                'responseCode' => '6700',
                'responseText' => 'Wrong length',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            44 => 
            array (
                'id' => 45,
                'card_id' => 0,
                'responseCode' => '6800',
            'responseText' => 'No information given(The request function is not supported by the card)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            45 => 
            array (
                'id' => 46,
                'card_id' => 0,
                'responseCode' => '6881',
                'responseText' => 'Logical channel not supported',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            46 => 
            array (
                'id' => 47,
                'card_id' => 0,
                'responseCode' => '6882',
                'responseText' => 'Secure messaging not supported',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            47 => 
            array (
                'id' => 48,
                'card_id' => 0,
                'responseCode' => '6883',
                'responseText' => 'Last command of the chain expected',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            48 => 
            array (
                'id' => 49,
                'card_id' => 0,
                'responseCode' => '6884',
                'responseText' => 'Command chaining not supported',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            49 => 
            array (
                'id' => 50,
                'card_id' => 0,
                'responseCode' => '6900',
            'responseText' => 'No information given(Command not allowed)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            50 => 
            array (
                'id' => 51,
                'card_id' => 0,
                'responseCode' => '6901',
            'responseText' => 'Command not accepted(inactive state)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            51 => 
            array (
                'id' => 52,
                'card_id' => 0,
                'responseCode' => '6981',
                'responseText' => 'Command incompatible with file structure',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            52 => 
            array (
                'id' => 53,
                'card_id' => 0,
                'responseCode' => '6982',
                'responseText' => 'Security condition not satisfied.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            53 => 
            array (
                'id' => 54,
                'card_id' => 0,
                'responseCode' => '6983',
                'responseText' => 'Authentication method blocked',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            54 => 
            array (
                'id' => 55,
                'card_id' => 0,
                'responseCode' => '6984',
            'responseText' => 'Referenced data reversibly blocked(invalidated)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            55 => 
            array (
                'id' => 56,
                'card_id' => 0,
                'responseCode' => '6985',
                'responseText' => 'Conditions of use not satisfied.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            56 => 
            array (
                'id' => 57,
                'card_id' => 0,
                'responseCode' => '6986',
            'responseText' => 'Command not allowed(no current EF)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            57 => 
            array (
                'id' => 58,
                'card_id' => 0,
                'responseCode' => '6987',
            'responseText' => 'Expected secure messaging(SM) object missing',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            58 => 
            array (
                'id' => 59,
                'card_id' => 0,
                'responseCode' => '6988',
            'responseText' => 'Incorrect secure messaging(SM) data object',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            59 => 
            array (
                'id' => 60,
                'card_id' => 0,
                'responseCode' => '698D',
                'responseText' => 'Reserved',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            60 => 
            array (
                'id' => 61,
                'card_id' => 0,
                'responseCode' => '6996',
                'responseText' => 'Data must be updated again',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            61 => 
            array (
                'id' => 62,
                'card_id' => 0,
                'responseCode' => '69E1',
                'responseText' => 'POL1 of the currently Enabled Profile prevents this action.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            62 => 
            array (
                'id' => 63,
                'card_id' => 0,
                'responseCode' => '69F0',
                'responseText' => 'Permission Denied',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            63 => 
            array (
                'id' => 64,
                'card_id' => 0,
                'responseCode' => '69F1',
                'responseText' => 'Permission Denied – Missing Privilege',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            64 => 
            array (
                'id' => 65,
                'card_id' => 0,
                'responseCode' => '6A00',
            'responseText' => 'No information given(Bytes P1 and/ or P2 are incorrect)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            65 => 
            array (
                'id' => 66,
                'card_id' => 0,
                'responseCode' => '6A80',
                'responseText' => 'The parameters in the data field are incorrect.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            66 => 
            array (
                'id' => 67,
                'card_id' => 0,
                'responseCode' => '6A81',
                'responseText' => 'Function not supported',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            67 => 
            array (
                'id' => 68,
                'card_id' => 0,
                'responseCode' => '6A82',
                'responseText' => 'File not found',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            68 => 
            array (
                'id' => 69,
                'card_id' => 0,
                'responseCode' => '6A83',
                'responseText' => 'Record not found',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            69 => 
            array (
                'id' => 70,
                'card_id' => 0,
                'responseCode' => '6A84',
                'responseText' => 'There is insufficient memory space in record or file',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            70 => 
            array (
                'id' => 71,
                'card_id' => 0,
                'responseCode' => '6A85',
                'responseText' => 'Lc inconsistent with TLV structure',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            71 => 
            array (
                'id' => 72,
                'card_id' => 0,
                'responseCode' => '6A86',
                'responseText' => 'Incorrect P1 or P2 parameter.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            72 => 
            array (
                'id' => 73,
                'card_id' => 0,
                'responseCode' => '6A87',
                'responseText' => 'Lc inconsistent with P1 - P2',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            73 => 
            array (
                'id' => 74,
                'card_id' => 0,
                'responseCode' => '6A88',
                'responseText' => 'Referenced data not found',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            74 => 
            array (
                'id' => 75,
                'card_id' => 0,
                'responseCode' => '6A89',
                'responseText' => 'File already exists',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            75 => 
            array (
                'id' => 76,
                'card_id' => 0,
                'responseCode' => '6A8A',
                'responseText' => 'DF name already exists.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            76 => 
            array (
                'id' => 77,
                'card_id' => 0,
                'responseCode' => '6B00',
            'responseText' => 'Wrong parameter(s) P1 - P2',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            77 => 
            array (
                'id' => 78,
                'card_id' => 0,
                'responseCode' => '6C00',
                'responseText' => 'Incorrect P3 length.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            78 => 
            array (
                'id' => 79,
                'card_id' => 0,
                'responseCode' => '6D00',
                'responseText' => 'Instruction code not supported or invalid',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            79 => 
            array (
                'id' => 80,
                'card_id' => 0,
                'responseCode' => '6E00',
                'responseText' => 'Class not supported',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            80 => 
            array (
                'id' => 81,
                'card_id' => 0,
                'responseCode' => '6F00',
            'responseText' => 'Command aborted – more exact diagnosis not possible(e.g., operating system error).',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            81 => 
            array (
                'id' => 82,
                'card_id' => 0,
                'responseCode' => '6FFF',
            'responseText' => 'Card dead(overuse, …)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            82 => 
            array (
                'id' => 83,
                'card_id' => 0,
                'responseCode' => '9000',
            'responseText' => 'Command successfully executed(OK).',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            83 => 
            array (
                'id' => 84,
                'card_id' => 0,
                'responseCode' => '9004',
                'responseText' => 'PIN not succesfully verified, 3 or more PIN tries left',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            84 => 
            array (
                'id' => 85,
                'card_id' => 0,
                'responseCode' => '9008',
                'responseText' => 'Key/file not found',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            85 => 
            array (
                'id' => 86,
                'card_id' => 0,
                'responseCode' => '9080',
                'responseText' => 'Unblock Try Counter has reached zero',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            86 => 
            array (
                'id' => 87,
                'card_id' => 0,
                'responseCode' => '9100',
                'responseText' => 'OK',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            87 => 
            array (
                'id' => 88,
                'card_id' => 0,
                'responseCode' => '9101',
                'responseText' => 'States.activity, States.lock Status or States.lockable has wrong value',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            88 => 
            array (
                'id' => 89,
                'card_id' => 0,
                'responseCode' => '9102',
                'responseText' => 'Transaction number reached its limit',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            89 => 
            array (
                'id' => 90,
                'card_id' => 0,
                'responseCode' => '910C',
                'responseText' => 'No changes',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            90 => 
            array (
                'id' => 91,
                'card_id' => 0,
                'responseCode' => '910E',
                'responseText' => 'Insufficient NV-Memory to complete command',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            91 => 
            array (
                'id' => 92,
                'card_id' => 0,
                'responseCode' => '911C',
                'responseText' => 'Command code not supported',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            92 => 
            array (
                'id' => 93,
                'card_id' => 0,
                'responseCode' => '911E',
                'responseText' => 'CRC or MAC does not match data',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            93 => 
            array (
                'id' => 94,
                'card_id' => 0,
                'responseCode' => '9140',
                'responseText' => 'Invalid key number specified',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            94 => 
            array (
                'id' => 95,
                'card_id' => 0,
                'responseCode' => '917E',
                'responseText' => 'Length of command string invalid',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            95 => 
            array (
                'id' => 96,
                'card_id' => 0,
                'responseCode' => '919D',
                'responseText' => 'Not allow the requested command',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            96 => 
            array (
                'id' => 97,
                'card_id' => 0,
                'responseCode' => '919E',
                'responseText' => 'Value of the parameter invalid',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            97 => 
            array (
                'id' => 98,
                'card_id' => 0,
                'responseCode' => '91A0',
                'responseText' => 'Requested AID not present on PICC',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            98 => 
            array (
                'id' => 99,
                'card_id' => 0,
                'responseCode' => '91A1',
                'responseText' => 'Unrecoverable error within application',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            99 => 
            array (
                'id' => 100,
                'card_id' => 0,
                'responseCode' => '91AE',
                'responseText' => 'Authentication status does not allow the requested command',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            100 => 
            array (
                'id' => 101,
                'card_id' => 0,
                'responseCode' => '91AF',
                'responseText' => 'Additional data frame is expected to be sent',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            101 => 
            array (
                'id' => 102,
                'card_id' => 0,
                'responseCode' => '91BE',
                'responseText' => 'Out of boundary',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            102 => 
            array (
                'id' => 103,
                'card_id' => 0,
                'responseCode' => '91C1',
                'responseText' => 'Unrecoverable error within PICC',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            103 => 
            array (
                'id' => 104,
                'card_id' => 0,
                'responseCode' => '91CA',
                'responseText' => 'Previous Command was not fully completed',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            104 => 
            array (
                'id' => 105,
                'card_id' => 0,
                'responseCode' => '91CD',
                'responseText' => 'PICC was disabled by an unrecoverable error',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            105 => 
            array (
                'id' => 106,
                'card_id' => 0,
                'responseCode' => '91CE',
                'responseText' => 'Number of Applications limited to 28',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            106 => 
            array (
                'id' => 107,
                'card_id' => 0,
                'responseCode' => '91DE',
                'responseText' => 'File or application already exists',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            107 => 
            array (
                'id' => 108,
                'card_id' => 0,
                'responseCode' => '91EE',
                'responseText' => 'Could not complete NV-write operation due to loss of power',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            108 => 
            array (
                'id' => 109,
                'card_id' => 0,
                'responseCode' => '91F0',
                'responseText' => 'Specified file number does not exist',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            109 => 
            array (
                'id' => 110,
                'card_id' => 0,
                'responseCode' => '91F1',
                'responseText' => 'Unrecoverable error within file',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            110 => 
            array (
                'id' => 111,
                'card_id' => 0,
                'responseCode' => '9210',
                'responseText' => 'Insufficient memory.No more storage available.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            111 => 
            array (
                'id' => 112,
                'card_id' => 0,
                'responseCode' => '9240',
                'responseText' => 'Writing to EEPROM not successful.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            112 => 
            array (
                'id' => 113,
                'card_id' => 0,
                'responseCode' => '9301',
                'responseText' => 'Integrity error',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            113 => 
            array (
                'id' => 114,
                'card_id' => 0,
                'responseCode' => '9302',
                'responseText' => 'Candidate S2 invalid',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            114 => 
            array (
                'id' => 115,
                'card_id' => 0,
                'responseCode' => '9303',
                'responseText' => 'Application is permanently locked',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            115 => 
            array (
                'id' => 116,
                'card_id' => 0,
                'responseCode' => '9400',
                'responseText' => 'No EF selected.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            116 => 
            array (
                'id' => 117,
                'card_id' => 0,
                'responseCode' => '9401',
                'responseText' => 'Candidate currency code does not match purse currency',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            117 => 
            array (
                'id' => 118,
                'card_id' => 0,
                'responseCode' => '9402',
                'responseText' => 'Candidate amount too high or address range exceeded.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            118 => 
            array (
                'id' => 120,
                'card_id' => 0,
                'responseCode' => '9403',
                'responseText' => 'Candidate amount too low',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            119 => 
            array (
                'id' => 121,
                'card_id' => 0,
                'responseCode' => '9404',
                'responseText' => 'FID not found, record not found or comparison pattern not found.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            120 => 
            array (
                'id' => 122,
                'card_id' => 0,
                'responseCode' => '9405',
                'responseText' => 'Problems in the data field',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            121 => 
            array (
                'id' => 123,
                'card_id' => 0,
                'responseCode' => '9406',
                'responseText' => 'Required MAC unavailable',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            122 => 
            array (
                'id' => 124,
                'card_id' => 0,
                'responseCode' => '9407',
                'responseText' => 'Bad currency : purse engine has no slot with R3bc currency',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            123 => 
            array (
                'id' => 125,
                'card_id' => 0,
                'responseCode' => '9408',
                'responseText' => 'R3bc currency not supported in purse engine or Selected file type does not match command.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            124 => 
            array (
                'id' => 127,
                'card_id' => 0,
                'responseCode' => '9580',
                'responseText' => 'Bad sequence',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            125 => 
            array (
                'id' => 128,
                'card_id' => 0,
                'responseCode' => '9681',
                'responseText' => 'Slave not found',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            126 => 
            array (
                'id' => 129,
                'card_id' => 0,
                'responseCode' => '9700',
                'responseText' => 'PIN blocked and Unblock Try Counter is 1 or 2',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            127 => 
            array (
                'id' => 130,
                'card_id' => 0,
                'responseCode' => '9702',
                'responseText' => 'Main keys are blocked',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            128 => 
            array (
                'id' => 131,
                'card_id' => 0,
                'responseCode' => '9704',
                'responseText' => 'PIN not succesfully verified, 3 or more PIN tries left',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            129 => 
            array (
                'id' => 132,
                'card_id' => 0,
                'responseCode' => '9784',
                'responseText' => 'Base key',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            130 => 
            array (
                'id' => 133,
                'card_id' => 0,
                'responseCode' => '9785',
                'responseText' => 'Limit exceeded – C-MAC key',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            131 => 
            array (
                'id' => 134,
                'card_id' => 0,
                'responseCode' => '9786',
                'responseText' => 'SM error – Limit exceeded – R-MAC key',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            132 => 
            array (
                'id' => 135,
                'card_id' => 0,
                'responseCode' => '9787',
                'responseText' => 'Limit exceeded – sequence counter',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            133 => 
            array (
                'id' => 136,
                'card_id' => 0,
                'responseCode' => '9788',
                'responseText' => 'Limit exceeded – R-MAC length',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            134 => 
            array (
                'id' => 137,
                'card_id' => 0,
                'responseCode' => '9789',
                'responseText' => 'Service not available',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            135 => 
            array (
                'id' => 138,
                'card_id' => 0,
                'responseCode' => '9802',
                'responseText' => 'No PIN defined.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            136 => 
            array (
                'id' => 139,
                'card_id' => 0,
                'responseCode' => '9804',
                'responseText' => 'Access conditions not satisfied, authentication failed.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            137 => 
            array (
                'id' => 140,
                'card_id' => 0,
                'responseCode' => '9835',
                'responseText' => 'ASK RANDOM or GIVE RANDOM not executed.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            138 => 
            array (
                'id' => 141,
                'card_id' => 0,
                'responseCode' => '9840',
                'responseText' => 'PIN verification not successful.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            139 => 
            array (
                'id' => 142,
                'card_id' => 0,
                'responseCode' => '9850',
                'responseText' => 'INCREASE or DECREASE could not be executed because a limit has been reached.',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            140 => 
            array (
                'id' => 143,
                'card_id' => 0,
                'responseCode' => '9862',
            'responseText' => 'Authentication Error, application specific (incorrect MAC)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            141 => 
            array (
                'id' => 144,
                'card_id' => 0,
                'responseCode' => '9900',
                'responseText' => '1 PIN try left',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            142 => 
            array (
                'id' => 145,
                'card_id' => 0,
                'responseCode' => '9904',
                'responseText' => 'PIN not succesfully verified, 1 PIN try left',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            143 => 
            array (
                'id' => 146,
                'card_id' => 0,
                'responseCode' => '9985',
                'responseText' => 'Wrong status – Cardholder lock',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            144 => 
            array (
                'id' => 147,
                'card_id' => 0,
                'responseCode' => '9986',
                'responseText' => 'Missing privilege',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            145 => 
            array (
                'id' => 148,
                'card_id' => 0,
                'responseCode' => '9987',
                'responseText' => 'PIN is not installed',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            146 => 
            array (
                'id' => 149,
                'card_id' => 0,
                'responseCode' => '9988',
                'responseText' => 'Wrong status – R-MAC state',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            147 => 
            array (
                'id' => 150,
                'card_id' => 0,
                'responseCode' => '9A00',
                'responseText' => '2 PIN try left',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            148 => 
            array (
                'id' => 151,
                'card_id' => 0,
                'responseCode' => '9A04',
                'responseText' => 'PIN not succesfully verified, 2 PIN try left',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            149 => 
            array (
                'id' => 152,
                'card_id' => 0,
                'responseCode' => '9A71',
                'responseText' => 'Wrong parameter value – Double agent AID',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            150 => 
            array (
                'id' => 153,
                'card_id' => 0,
                'responseCode' => '9A72',
                'responseText' => 'Wrong parameter value – Double agent Type',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            151 => 
            array (
                'id' => 154,
                'card_id' => 0,
                'responseCode' => '9D05',
                'responseText' => 'Incorrect certificate type',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            152 => 
            array (
                'id' => 155,
                'card_id' => 0,
                'responseCode' => '9D07',
                'responseText' => 'Incorrect session data size',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            153 => 
            array (
                'id' => 156,
                'card_id' => 0,
                'responseCode' => '9D08',
                'responseText' => 'Incorrect DIR file record size',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            154 => 
            array (
                'id' => 157,
                'card_id' => 0,
                'responseCode' => '9D09',
                'responseText' => 'Incorrect FCI record size',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            155 => 
            array (
                'id' => 158,
                'card_id' => 0,
                'responseCode' => '9D0A',
                'responseText' => 'Incorrect code size',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            156 => 
            array (
                'id' => 159,
                'card_id' => 0,
                'responseCode' => '9D10',
                'responseText' => 'Insufficient memory to load application',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            157 => 
            array (
                'id' => 160,
                'card_id' => 0,
                'responseCode' => '9D11',
                'responseText' => 'Invalid AID',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            158 => 
            array (
                'id' => 161,
                'card_id' => 0,
                'responseCode' => '9D12',
                'responseText' => 'Duplicate AID',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            159 => 
            array (
                'id' => 162,
                'card_id' => 0,
                'responseCode' => '9D13',
                'responseText' => 'Application previously loaded',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            160 => 
            array (
                'id' => 163,
                'card_id' => 0,
                'responseCode' => '9D14',
                'responseText' => 'Application history list full',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            161 => 
            array (
                'id' => 164,
                'card_id' => 0,
                'responseCode' => '9D15',
                'responseText' => 'Application not open',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            162 => 
            array (
                'id' => 165,
                'card_id' => 0,
                'responseCode' => '9D17',
                'responseText' => 'Invalid offset',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            163 => 
            array (
                'id' => 166,
                'card_id' => 0,
                'responseCode' => '9D18',
                'responseText' => 'Application already loaded',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            164 => 
            array (
                'id' => 167,
                'card_id' => 0,
                'responseCode' => '9D19',
                'responseText' => 'Invalid certificate',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            165 => 
            array (
                'id' => 168,
                'card_id' => 0,
                'responseCode' => '9D1A',
                'responseText' => 'Invalid signature',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            166 => 
            array (
                'id' => 169,
                'card_id' => 0,
                'responseCode' => '9D1B',
                'responseText' => 'Invalid KTU',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            167 => 
            array (
                'id' => 170,
                'card_id' => 0,
                'responseCode' => '9D1D',
                'responseText' => 'MSM controls not set',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            168 => 
            array (
                'id' => 171,
                'card_id' => 0,
                'responseCode' => '9D1E',
                'responseText' => 'Application signature does not exist',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            169 => 
            array (
                'id' => 172,
                'card_id' => 0,
                'responseCode' => '9D1F',
                'responseText' => 'KTU does not exist',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            170 => 
            array (
                'id' => 173,
                'card_id' => 0,
                'responseCode' => '9D20',
                'responseText' => 'Application not loaded',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            171 => 
            array (
                'id' => 174,
                'card_id' => 0,
                'responseCode' => '9D21',
                'responseText' => 'Invalid Open command data length',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            172 => 
            array (
                'id' => 175,
                'card_id' => 0,
                'responseCode' => '9D30',
            'responseText' => 'Check data parameter is incorrect (invalid start address)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            173 => 
            array (
                'id' => 176,
                'card_id' => 0,
                'responseCode' => '9D31',
            'responseText' => 'Check data parameter is incorrect(invalid length)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            174 => 
            array (
                'id' => 177,
                'card_id' => 0,
                'responseCode' => '9D32',
            'responseText' => 'Check data parameter is incorrect(illegal memory check area)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            175 => 
            array (
                'id' => 178,
                'card_id' => 0,
                'responseCode' => '9D40',
                'responseText' => 'Invalid MSM Controls ciphertext',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            176 => 
            array (
                'id' => 179,
                'card_id' => 0,
                'responseCode' => '9D41',
                'responseText' => 'MSM controls already set',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            177 => 
            array (
                'id' => 180,
                'card_id' => 0,
                'responseCode' => '9D42',
                'responseText' => 'Set MSM Controls data length less than 2 bytes',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            178 => 
            array (
                'id' => 181,
                'card_id' => 0,
                'responseCode' => '9D43',
                'responseText' => 'Invalid MSM Controls data length',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            179 => 
            array (
                'id' => 182,
                'card_id' => 0,
                'responseCode' => '9D44',
                'responseText' => 'Excess MSM Controls ciphertext',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            180 => 
            array (
                'id' => 183,
                'card_id' => 0,
                'responseCode' => '9D45',
                'responseText' => 'Verification of MSM Controls data failed',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            181 => 
            array (
                'id' => 184,
                'card_id' => 0,
                'responseCode' => '9D50',
                'responseText' => 'Invalid MCD Issuer production ID',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            182 => 
            array (
                'id' => 185,
                'card_id' => 0,
                'responseCode' => '9D51',
                'responseText' => 'Invalid MCD Issuer ID',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            183 => 
            array (
                'id' => 186,
                'card_id' => 0,
                'responseCode' => '9D52',
                'responseText' => 'Invalid set MSM controls data date',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            184 => 
            array (
                'id' => 187,
                'card_id' => 0,
                'responseCode' => '9D53',
                'responseText' => 'Invalid MCD number',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            185 => 
            array (
                'id' => 188,
                'card_id' => 0,
                'responseCode' => '9D54',
                'responseText' => 'Reserved field error',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            186 => 
            array (
                'id' => 189,
                'card_id' => 0,
                'responseCode' => '9D55',
                'responseText' => 'Reserved field error',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            187 => 
            array (
                'id' => 190,
                'card_id' => 0,
                'responseCode' => '9D56',
                'responseText' => 'Reserved field error',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            188 => 
            array (
                'id' => 191,
                'card_id' => 0,
                'responseCode' => '9D57',
                'responseText' => 'Reserved field error',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            189 => 
            array (
                'id' => 192,
                'card_id' => 0,
                'responseCode' => '9D60',
                'responseText' => 'MAC verification failed',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            190 => 
            array (
                'id' => 193,
                'card_id' => 0,
                'responseCode' => '9D61',
                'responseText' => 'Maximum number of unblocks reached',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            191 => 
            array (
                'id' => 194,
                'card_id' => 0,
                'responseCode' => '9D62',
                'responseText' => 'Card was not blocked',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            192 => 
            array (
                'id' => 195,
                'card_id' => 0,
                'responseCode' => '9D63',
                'responseText' => 'Crypto functions not available',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            193 => 
            array (
                'id' => 196,
                'card_id' => 0,
                'responseCode' => '9D64',
                'responseText' => 'No application loaded',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            194 => 
            array (
                'id' => 197,
                'card_id' => 0,
                'responseCode' => '9E00',
                'responseText' => 'PIN not installed',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            195 => 
            array (
                'id' => 198,
                'card_id' => 0,
                'responseCode' => '9E04',
                'responseText' => 'PIN not succesfully verified, PIN not installed',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            196 => 
            array (
                'id' => 199,
                'card_id' => 0,
                'responseCode' => '9F00',
                'responseText' => 'PIN blocked and Unblock Try Counter is 3',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            197 => 
            array (
                'id' => 200,
                'card_id' => 0,
                'responseCode' => '9F04',
                'responseText' => 'PIN not succesfully verified, PIN blocked and Unblock Try Counter is 3',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            198 => 
            array (
                'id' => 201,
                'card_id' => 1,
                'responseCode' => 'CA00',
                'responseText' => 'Wrong internal reply MCU',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            199 => 
            array (
                'id' => 202,
                'card_id' => 1,
                'responseCode' => 'CA08',
                'responseText' => 'Special case, battery level out of range',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            200 => 
            array (
                'id' => 204,
                'card_id' => 1,
                'responseCode' => 'CA01',
                'responseText' => 'Wrong receive length from MCU',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            201 => 
            array (
                'id' => 205,
                'card_id' => 1,
                'responseCode' => 'CAD1',
                'responseText' => 'Javacard OS, exception, MCU interface',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            202 => 
            array (
                'id' => 206,
                'card_id' => 1,
                'responseCode' => '0000',
                'responseText' => 'Null response',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            203 => 
            array (
                'id' => 207,
                'card_id' => 1,
                'responseCode' => '0001',
                'responseText' => 'System failure',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            204 => 
            array (
                'id' => 208,
                'card_id' => 1,
                'responseCode' => '0002',
            'responseText' => 'Response size(of one chunk) is larger than 512 byte ',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            205 => 
            array (
                'id' => 209,
                'card_id' => 1,
                'responseCode' => '0003',
            'responseText' => 'Time out (chunks receiving loop) -> max time = 1 sec ',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            206 => 
            array (
                'id' => 210,
                'card_id' => 1,
                'responseCode' => '0004',
            'responseText' => 'Time out (wait for interrupt) -> max time = 1 sec ',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            207 => 
            array (
                'id' => 211,
                'card_id' => 1,
                'responseCode' => '0005',
            'responseText' => 'Wrong EOT(end of transmission) from get version ',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            208 => 
            array (
                'id' => 212,
                'card_id' => 1,
                'responseCode' => '0006',
            'responseText' => 'Too big response(when all response size is bigger than 10k byte)',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            209 => 
            array (
                'id' => 213,
                'card_id' => 1,
                'responseCode' => '0007',
                'responseText' => 'read interrupt response is not 0x0001',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            210 => 
            array (
                'id' => 214,
                'card_id' => 1,
                'responseCode' => '0008',
                'responseText' => 'Wrong EOT from get config',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            211 => 
            array (
                'id' => 215,
                'card_id' => 1,
                'responseCode' => '5000',
                'responseText' => 'Flash error',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            212 => 
            array (
                'id' => 216,
                'card_id' => 1,
                'responseCode' => '806A',
                'responseText' => 'Timeout fingerprint not recognition',
                'responseLang' => 'EN-en',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
        ));
        
        
    }
}