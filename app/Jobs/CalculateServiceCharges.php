<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Model\ServiceSubscriptionCharges;
use App\Model\WarehouseServiceSubscription;
use App\Model\Warehouse;
use App\User;
use Carbon\Carbon;

class CalculateServiceCharges implements ShouldQueue
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
        $warehouse_subscriptions = WarehouseServiceSubscription::all();

        foreach ($warehouse_subscriptions as $key => $warehouse_subscription) {
            $warehouse_id = $warehouse_subscription['warehouse_id'];
            $service_id = $warehouse_subscription['service_id'];
            $renter_id    = Warehouse::where('id',$warehouse_id)->value('renter_id');

            $warehouse_subscription_charges = [
                'month'          => Carbon::now()->month,
                'service_id'     => $service_id,
                'renter_id'      => $renter_id,
            ];

            ServiceSubscriptionCharges::create($warehouse_subscription_charges);
        }
    }
}
