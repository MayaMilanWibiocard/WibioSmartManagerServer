<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ClearDbCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:clear-db-cache';

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
        $this->call('modelCache:clear', ['--model' => 'App\Models\ApduCommand']);
        $this->call('modelCache:clear', ['--model' => 'App\Models\ApduComponent']);
        $this->call('modelCache:clear', ['--model' => 'App\Models\ApduConstant']);
        $this->call('modelCache:clear', ['--model' => 'App\Models\ApduResponse']);
        $this->call('modelCache:clear', ['--model' => 'App\Models\ApduResponseCodes']);
        $this->call('modelCache:clear', ['--model' => 'App\Models\ApduSequences']);
        $this->call('modelCache:clear', ['--model' => 'App\Models\Card']);
        $this->call('modelCache:clear', ['--model' => 'App\Models\CardApdu']);
    }
}
