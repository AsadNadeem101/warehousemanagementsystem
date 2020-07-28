<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Model\PlanSubscriptionUser;
use Carbon\Carbon;
class ExpirePlan implements ShouldQueue
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
        $planSubscriptionUsers = PlanSubscriptionUser::all();

        foreach ($planSubscriptionUsers as $key => $planSubscriptionUser) {
            $today_date = Carbon::now();
            $end_date = Carbon::parse($planSubscriptionUser->end_date);
            if($end_date->gt($today_date))
            {
                $plan = PlanSubscriptionUser::where('id',$planSubscriptionUser->id)->update(['status' => 0]);
            }
        }
    }
}
