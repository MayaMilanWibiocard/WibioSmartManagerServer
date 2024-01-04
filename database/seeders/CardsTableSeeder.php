<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cards')->delete();
        
        \DB::table('cards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ATR' => '3B-8A-80-01-53-4C-43-4F-53-20-54-3D-43-4C-0D',
                'BTL_NAME' => 'h2020',
                'card_type' => 'CardLab Agnosco',
                'card_version' => 'SW compiled : Nov  9 2023 12:18:46 cardlab.a:b293d89',
                'card_applet' => 'BECardOtp',
                'card_applet_version' => '1010',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
            1 => 
            array (
                'id' => 2,
                'ATR' => '3B-8A-80-01-53-4C-43-4F-53-20-54-3D-43-4C-0D',
                'BTL_NAME' => 'h2020',
                'card_type' => 'CardLab Agnosco',
                'card_version' => 'SW compiled : MAy  21 2023 11:48:03 cardlab.a:b293d89',
                'card_applet' => 'BECardOtp',
                'card_applet_version' => '0E10',
                'created_at' => '2023-12-11 14:52:25',
                'updated_at' => '2023-12-11 14:52:25',
            ),
        ));
        
        
    }
}