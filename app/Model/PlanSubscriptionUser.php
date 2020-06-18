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
        'user_id', 
        'plan_id', 
        'start_date',
        'end_date',
        'paid',
        'paid_at'
    ];

    public $table = "plan_subscription_users";
}
