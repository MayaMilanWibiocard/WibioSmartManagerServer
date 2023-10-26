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
        \App\Models\User::factory()->create([
             'name' => 'MayaM',
             'email' => 'm.milan@wibiocard.com',
        ]);
        for ($i = 1; $i <= 100; $i++)
            DB::table('desktop_secret_keys')->insert([
                'oneShotSecretKey' => Str::random(24)
            ]);
    }
}
