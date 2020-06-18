<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TenantWarehouse extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'warehouse_id', 
        'renter_id', 
        'tenant_id',
        'start_date',
        'end_date',
        'duration',
        'rent',
        'status'
    ];

    public $table = "tenant_warehouses";
}
