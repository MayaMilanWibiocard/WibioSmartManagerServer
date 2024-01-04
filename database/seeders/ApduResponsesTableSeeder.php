<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApduResponsesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('apdu_responses')->delete();
        
        \DB::table('apdu_responses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'card_id' => 1,
                'apdu_command_id' => 3,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpSeqId", "FP": "30"}, {"FL": "4", "FN": "OtpCounter", "FP": "26"}, {"FL": "14", "FN": "OtpSeqName", "FP": "31"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            1 => 
            array (
                'id' => 2,
                'card_id' => 1,
                'apdu_command_id' => 5,
                'responseRules' => '[{"FL": "-4", "FN": "SWversion", "FP": "0"}, {"FL": "2", "FN": "AppletVersion", "FP": "-2"}]',
                'leftPadding' => '00',
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            2 => 
            array (
                'id' => 3,
                'card_id' => 1,
                'apdu_command_id' => 8,
                'responseRules' => '[{"FL": "", "FN": "RsaPub_0", "FP": "0"}]',
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            3 => 
            array (
                'id' => 4,
                'card_id' => 1,
                'apdu_command_id' => 9,
                'responseRules' => '[{"FL": "", "FN": "RsaPub_1", "FP": "0"}]',
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            4 => 
            array (
                'id' => 5,
                'card_id' => 1,
                'apdu_command_id' => 12,
                'responseRules' => '[{"FL": "14", "FN": "SequenceName", "FP": "0"}, {"FL": "2", "FN": "ExpositionTime", "FP": "14"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            5 => 
            array (
                'id' => 6,
                'card_id' => 1,
                'apdu_command_id' => 13,
                'responseRules' => '[{"FL": "14", "FN": "SequenceName", "FP": "0"}, {"FL": "2", "FN": "ExpositionTime", "FP": "14"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            6 => 
            array (
                'id' => 7,
                'card_id' => 1,
                'apdu_command_id' => 14,
                'responseRules' => '[{"FL": "14", "FN": "SequenceName", "FP": "0"}, {"FL": "2", "FN": "ExpositionTime", "FP": "14"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            7 => 
            array (
                'id' => 8,
                'card_id' => 1,
                'apdu_command_id' => 15,
                'responseRules' => '[{"FL": "14", "FN": "SequenceName", "FP": "0"}, {"FL": "2", "FN": "ExpositionTime", "FP": "14"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            8 => 
            array (
                'id' => 9,
                'card_id' => 1,
                'apdu_command_id' => 16,
                'responseRules' => '[{"FL": "14", "FN": "SequenceName", "FP": "0"}, {"FL": "2", "FN": "ExpositionTime", "FP": "14"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            9 => 
            array (
                'id' => 10,
                'card_id' => 1,
                'apdu_command_id' => 17,
                'responseRules' => '[{"FL": "14", "FN": "SequenceName", "FP": "0"}, {"FL": "2", "FN": "ExpositionTime", "FP": "14"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            10 => 
            array (
                'id' => 11,
                'card_id' => 1,
                'apdu_command_id' => 18,
                'responseRules' => '[{"FL": "14", "FN": "SequenceName", "FP": "0"}, {"FL": "2", "FN": "ExpositionTime", "FP": "14"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            11 => 
            array (
                'id' => 12,
                'card_id' => 1,
                'apdu_command_id' => 19,
                'responseRules' => '[{"FL": "14", "FN": "SequenceName", "FP": "0"}, {"FL": "2", "FN": "ExpositionTime", "FP": "14"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            12 => 
            array (
                'id' => 13,
                'card_id' => 1,
                'apdu_command_id' => 20,
                'responseRules' => '[{"FL": "14", "FN": "SequenceName", "FP": "0"}, {"FL": "2", "FN": "ExpositionTime", "FP": "14"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            13 => 
            array (
                'id' => 14,
                'card_id' => 1,
                'apdu_command_id' => 21,
                'responseRules' => '[{"FL": "14", "FN": "SequenceName", "FP": "0"}, {"FL": "2", "FN": "ExpositionTime", "FP": "14"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            14 => 
            array (
                'id' => 15,
                'card_id' => 1,
                'apdu_command_id' => 22,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            15 => 
            array (
                'id' => 16,
                'card_id' => 1,
                'apdu_command_id' => 23,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            16 => 
            array (
                'id' => 17,
                'card_id' => 1,
                'apdu_command_id' => 24,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            17 => 
            array (
                'id' => 18,
                'card_id' => 1,
                'apdu_command_id' => 25,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            18 => 
            array (
                'id' => 19,
                'card_id' => 1,
                'apdu_command_id' => 26,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            19 => 
            array (
                'id' => 20,
                'card_id' => 1,
                'apdu_command_id' => 27,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            20 => 
            array (
                'id' => 21,
                'card_id' => 1,
                'apdu_command_id' => 28,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            21 => 
            array (
                'id' => 22,
                'card_id' => 1,
                'apdu_command_id' => 29,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            22 => 
            array (
                'id' => 23,
                'card_id' => 1,
                'apdu_command_id' => 30,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            23 => 
            array (
                'id' => 24,
                'card_id' => 1,
                'apdu_command_id' => 31,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            24 => 
            array (
                'id' => 25,
                'card_id' => 1,
                'apdu_command_id' => 32,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            25 => 
            array (
                'id' => 26,
                'card_id' => 1,
                'apdu_command_id' => 33,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            26 => 
            array (
                'id' => 27,
                'card_id' => 1,
                'apdu_command_id' => 34,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            27 => 
            array (
                'id' => 28,
                'card_id' => 1,
                'apdu_command_id' => 35,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            28 => 
            array (
                'id' => 29,
                'card_id' => 1,
                'apdu_command_id' => 36,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            29 => 
            array (
                'id' => 30,
                'card_id' => 1,
                'apdu_command_id' => 37,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            30 => 
            array (
                'id' => 31,
                'card_id' => 1,
                'apdu_command_id' => 38,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            31 => 
            array (
                'id' => 32,
                'card_id' => 1,
                'apdu_command_id' => 39,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            32 => 
            array (
                'id' => 33,
                'card_id' => 1,
                'apdu_command_id' => 40,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            33 => 
            array (
                'id' => 34,
                'card_id' => 1,
                'apdu_command_id' => 41,
                'responseRules' => '[{"FL": "16", "FN": "CardId", "FP": "0"}, {"FL": "10", "FN": "CardOtp", "FP": "16"}, {"FL": "1", "FN": "OtpMode", "FP": "26"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            34 => 
            array (
                'id' => 35,
                'card_id' => 1,
                'apdu_command_id' => 52,
                'responseRules' => '[{"FL": ";", "FN": "Name", "FP": "0"}, {"FL": ";", "FN": "Email", "FP": ";"}, {"FL": "10", "FN": "ExpireDate", "FP": ";"}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            35 => 
            array (
                'id' => 36,
                'card_id' => 1,
                'apdu_command_id' => 54,
                'responseRules' => '[{"FL": "1", "FN": "Status", "FP": "0", "FV": {"0": "Not configured", "1": "Configuration in progress", "2": "Configuration in progress", "3": "Configuration in progress", "4": "Configurated"}}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            36 => 
            array (
                'id' => 37,
                'card_id' => 1,
                'apdu_command_id' => 60,
                'responseRules' => '[{"FL": "1", "FN": "Status", "FP": "0", "FV": {"0": "Configuration mode", "1": "Enroll mode", "2": "Verification mode"}}]',
                'leftPadding' => NULL,
                'rightPadding' => '00',
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            37 => 
            array (
                'id' => 38,
                'card_id' => 1,
                'apdu_command_id' => 108,
                'responseRules' => '[{"FL": "2", "FN": "Vaultage", "FP": "0"}, {"FL": "2", "FN": "Percentage", "FP": "2"}]',
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            38 => 
            array (
                'id' => 39,
                'card_id' => 1,
                'apdu_command_id' => 173,
                'responseRules' => '[{"FL": "1", "FN": "FingerId", "FP": "0"}, {"FL": "1", "FN": "FingerRemaining", "FP": "1"}]',
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            39 => 
            array (
                'id' => 40,
                'card_id' => 1,
                'apdu_command_id' => 174,
                'responseRules' => '[{"FL": "1", "FN": "FingerId", "FP": "0"}, {"FL": "1", "FN": "FingerRemaining", "FP": "1"}]',
                'leftPadding' => NULL,
                'rightPadding' => NULL,
                'isBigEndian' => 1,
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
        ));
        
        
    }
}