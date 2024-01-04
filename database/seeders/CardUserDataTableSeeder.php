<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CardUserDataTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('card_user_data')->delete();
        
        \DB::table('card_user_data')->insert(array (
            0 => 
            array (
                'id' => 1,
                'Category' => 'CARD DATA',
                'Type' => 'date',
                'Key' => 'IE',
                'Name' => 'Expire date',
                'Length' => 8,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            1 => 
            array (
                'id' => 2,
                'Category' => 'CARD DATA',
                'Type' => 'text',
                'Key' => 'ID',
                'Name' => 'Card ID',
                'Length' => 16,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            2 => 
            array (
                'id' => 3,
                'Category' => 'USER DATA',
                'Type' => 'mail',
                'Key' => 'UE',
                'Name' => 'Email',
                'Length' => 64,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            3 => 
            array (
                'id' => 4,
                'Category' => 'USER DATA',
                'Type' => 'text',
                'Key' => 'US',
                'Name' => 'Family Name',
                'Length' => 32,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            4 => 
            array (
                'id' => 5,
                'Category' => 'USER DATA',
                'Type' => 'text',
                'Key' => 'UN',
                'Name' => 'Name',
                'Length' => 32,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            5 => 
            array (
                'id' => 6,
                'Category' => 'USER DATA',
                'Type' => 'text',
                'Key' => 'UF',
                'Name' => 'Fiscal code',
                'Length' => 16,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            6 => 
            array (
                'id' => 7,
                'Category' => 'USER DATA',
                'Type' => 'text',
                'Key' => 'UG',
                'Name' => 'Gender',
                'Length' => 2,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            7 => 
            array (
                'id' => 8,
                'Category' => 'USER DATA',
                'Type' => 'date',
                'Key' => 'UB',
                'Name' => 'Date of birth',
                'Length' => 8,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            8 => 
            array (
                'id' => 9,
                'Category' => 'USER DATA',
                'Type' => 'text',
                'Key' => 'UP',
                'Name' => 'Place of birth',
                'Length' => 32,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            9 => 
            array (
                'id' => 10,
                'Category' => 'USER DATA',
                'Type' => 'text',
                'Key' => 'US',
                'Name' => 'State of birth',
                'Length' => 16,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            10 => 
            array (
                'id' => 11,
                'Category' => 'USER DATA',
                'Type' => 'text',
                'Key' => 'UA',
                'Name' => 'Address',
                'Length' => 64,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            11 => 
            array (
                'id' => 12,
                'Category' => 'USER DATA',
                'Type' => 'text',
                'Key' => 'UP',
                'Name' => 'Province',
                'Length' => 2,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            12 => 
            array (
                'id' => 13,
                'Category' => 'USER DATA',
                'Type' => 'text',
                'Key' => 'UC',
                'Name' => 'City',
                'Length' => 32,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            13 => 
            array (
                'id' => 14,
                'Category' => 'USER DATA',
                'Type' => 'text',
                'Key' => 'UU',
                'Name' => 'State',
                'Length' => 16,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            14 => 
            array (
                'id' => 15,
                'Category' => 'HEALTH INSURANCE T.E.A.M.',
                'Type' => 'date',
                'Key' => 'HE',
                'Name' => 'Expire date',
                'Length' => 8,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            15 => 
            array (
                'id' => 16,
                'Category' => 'HEALTH INSURANCE T.E.A.M.',
                'Type' => 'text',
                'Key' => 'HISO',
                'Name' => 'Iso Code of release state',
                'Length' => 8,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            16 => 
            array (
                'id' => 17,
                'Category' => 'HEALTH INSURANCE T.E.A.M.',
                'Type' => 'text',
                'Key' => 'HC',
                'Name' => 'Card code',
                'Length' => 24,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            17 => 
            array (
                'id' => 18,
                'Category' => 'DRIVER LICENZE DATA',
                'Type' => 'date',
                'Key' => 'D4a',
                'Name' => 'Creation date',
                'Length' => 8,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            18 => 
            array (
                'id' => 19,
                'Category' => 'DRIVER LICENZE DATA',
                'Type' => 'date',
                'Key' => 'D4b',
                'Name' => 'Expire date',
                'Length' => 8,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            19 => 
            array (
                'id' => 20,
                'Category' => 'DRIVER LICENZE DATA',
                'Type' => 'text',
                'Key' => 'D4c',
                'Name' => 'Creation state',
                'Length' => 16,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            20 => 
            array (
                'id' => 21,
                'Category' => 'DRIVER LICENZE DATA',
                'Type' => 'num',
                'Key' => 'DP ',
                'Name' => 'Total points',
                'Length' => 2,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            21 => 
            array (
                'id' => 22,
                'Category' => 'DRIVER LICENZE DATA',
                'Type' => 'text',
                'Key' => 'D5',
                'Name' => 'Driving License ID',
                'Length' => 12,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            22 => 
            array (
                'id' => 23,
                'Category' => 'COMPANY DATA',
                'Type' => 'text',
                'Key' => 'CN',
                'Name' => 'Company name',
                'Length' => 64,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            23 => 
            array (
                'id' => 24,
                'Category' => 'COMPANY DATA',
                'Type' => 'text',
                'Key' => 'CA',
                'Name' => 'company address',
                'Length' => 64,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            24 => 
            array (
                'id' => 25,
                'Category' => 'COMPANY DATA',
                'Type' => 'text',
                'Key' => 'CC',
                'Name' => 'Company city',
                'Length' => 32,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            25 => 
            array (
                'id' => 26,
                'Category' => 'COMPANY DATA',
                'Type' => 'text',
                'Key' => 'CP',
                'Name' => 'Company province',
                'Length' => 2,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            26 => 
            array (
                'id' => 27,
                'Category' => 'COMPANY DATA',
                'Type' => 'text',
                'Key' => 'CS',
                'Name' => 'Company state',
                'Length' => 24,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            27 => 
            array (
                'id' => 28,
                'Category' => 'COMPANY DATA',
                'Type' => 'text',
                'Key' => 'CF',
                'Name' => 'Company fiscal code',
                'Length' => 16,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            28 => 
            array (
                'id' => 29,
                'Category' => 'COMPANY DATA',
                'Type' => 'text',
                'Key' => 'CUI',
                'Name' => 'Com. user id',
                'Length' => 16,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            29 => 
            array (
                'id' => 30,
                'Category' => 'COMPANY DATA',
                'Type' => 'mail',
                'Key' => 'CUE',
                'Name' => 'Com. user email',
                'Length' => 64,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            30 => 
            array (
                'id' => 31,
                'Category' => 'COMPANY DATA',
                'Type' => 'text',
                'Key' => 'CUP',
                'Name' => 'Com. user phone',
                'Length' => 16,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            31 => 
            array (
                'id' => 32,
                'Category' => 'UNIVERSITY DATA',
                'Type' => 'text',
                'Key' => 'UUI',
                'Name' => 'University id',
                'Length' => 32,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            32 => 
            array (
                'id' => 33,
                'Category' => 'UNIVERSITY DATA',
                'Type' => 'text',
                'Key' => 'UDC',
                'Name' => 'Degree course id',
                'Length' => 8,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            33 => 
            array (
                'id' => 34,
                'Category' => 'UNIVERSITY DATA',
                'Type' => 'text',
                'Key' => 'USI',
                'Name' => 'Studend id',
                'Length' => 12,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
            34 => 
            array (
                'id' => 35,
                'Category' => 'DIGITAL FINGERPRINT',
                'Type' => 'img',
                'Key' => 'DFI',
                'Name' => 'Digital fingerprint image',
                'Length' => 2048,
                'Padding' => '00',
                'Value' => NULL,
                'created_at' => '2024-01-04 14:12:04',
                'updated_at' => '2024-01-04 14:12:04',
            ),
        ));
        
        
    }
}