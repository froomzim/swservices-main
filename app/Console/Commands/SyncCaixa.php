<?php

namespace App\Console\Commands;

use App\Http\Controllers\SynchronizationController;
use App\Services\Synchronization\CardService;
use Illuminate\Console\Command;

class SyncCaixa extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'sync all data';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $routine = (new SynchronizationController);
        $routine->syncRoutine();
    }
}
