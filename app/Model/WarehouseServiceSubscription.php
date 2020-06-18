<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WarehouseServiceSubscription extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'warehouse_id', 
        'service_id', 
        'status',
    ];

    public $table = "warehouse_service_subscriptions";
}
