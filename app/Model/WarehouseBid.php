<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WarehouseBid extends Model
{
    public $table = "warehouse_bids";

    protected $fillable = [
    	'warehouse_ad_id',
    	'renter_id',
    	'tenant_id',
    	'bid_amount',
    	'status',
    ];
}
