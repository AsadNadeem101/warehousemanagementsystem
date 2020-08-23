<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Model\TenantRent;
use App\Model\TenantWarehouse;
use App\User;
use Carbon\Carbon;
class GenerateMonthlyTenantBill implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $tenants = User::where('type','tenant')->get();
        foreach ($tenants as $key => $tenant) {
            $warehouses_rent = TenantWarehouse::where('tenant_id',$tenant['id'])->where('status',1)->get();
            foreach ($warehouses_rent as $key => $warehouse_rent) {
                $tenant_rent = TenantRent::create([
                    'tenant_warehouse_id'  => $warehouse_rent['id'],
                    'month' => Carbon::now()->month,
                    'rent'  => $warehouse_rent['rent'],
                    'paid'  => 0,
                ]);
            }
        }

    }
}
