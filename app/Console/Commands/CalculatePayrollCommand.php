<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\CalculatePayroll;
use Carbon\Carbon;

class CalculatePayrollCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:payroll';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate Payroll';

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
        CalculatePayroll::dispatch();
    }
}
