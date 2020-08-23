<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\CalculateServiceCharges;

class CalculateServiceChargesCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calculate:service-charges';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculate Service Charges';

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
        CalculateServiceCharges::dispatch();
    }
}
