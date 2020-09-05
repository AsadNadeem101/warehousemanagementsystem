<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TenantRent extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tenant_warehouse_id', 
        'month',
        'paid',
        'account_no',
        'account_number',
        'system_verification',
        'rent',
        'paid_at',
    ];

    public $table = "tenant_rents";
}
