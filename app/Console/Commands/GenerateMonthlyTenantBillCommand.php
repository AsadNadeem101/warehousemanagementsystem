<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\GenerateMonthlyTenantBill;
use Carbon\Carbon;

class GenerateMonthlyTenantBillCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:monthly-tenant-bill';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate monthly tenant bill';

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
        GenerateMonthlyTenantBill::dispatch();
    }
}
