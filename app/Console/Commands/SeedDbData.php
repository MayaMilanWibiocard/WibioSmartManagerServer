<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SeedDbData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:seed-db-data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('iseed cards,card_apdus, apdu_commands, apdu_sequences, apdu_responses, apdu_components, apdu_constants, apdu_response_codes, card_user_data  --force');
    }
}
