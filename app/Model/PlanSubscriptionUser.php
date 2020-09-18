<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PlanSubscriptionUser extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'renter_id',
        'warehouse_id', 
        'plan_id',
        'warehouse_ad_id',
        'start_date',
        'end_date',
        'paid',
        'payment_status',
        'account_number',
        'system_verification',
        'paid_at'
    ];

    public $table = "plan_subscription_users";


}
