<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str; 
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory()->create([
        //      'name' => 'MayaM',
        //      'email' => 'm.milan@wibiocard.com',
        // ]);
        // for ($i = 1; $i <= 100; $i++)
        //     DB::table('desktop_secret_keys')->insert([
        //         'oneShotSecretKey' => Str::random(24)
        //     ]);
        $this->call(CardsTableSeeder::class);
        $this->call(CardApdusTableSeeder::class);
        $this->call(ApduCommandsTableSeeder::class);
        $this->call(ApduSequencesTableSeeder::class);
        $this->call(ApduResponsesTableSeeder::class);
        $this->call(ApduComponentsTableSeeder::class);
        $this->call(ApduConstantsTableSeeder::class);
        $this->call(ApduResponseCodesTableSeeder::class);
        $this->call(CardUserDataTableSeeder::class);
    }
}
