<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\ExpirePlan;
use Carbon\Carbon;

class ExpirePlanCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'expire:plan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Expire Plan';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        ExpirePlan::dispatch();
    }
}
