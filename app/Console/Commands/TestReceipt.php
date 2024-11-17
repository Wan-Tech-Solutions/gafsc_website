<?php

namespace App\Console\Commands;

use Cache;
use Illuminate\Console\Command;

class TestReceipt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'receipt:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Receipts';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Cache::flush();
    }
}
