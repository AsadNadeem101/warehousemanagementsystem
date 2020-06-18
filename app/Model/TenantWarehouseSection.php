<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TenantWarehouseSection extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'description',
        'room', 
        'marla',
        'tenant_warehouse_id',
        'status'
    ];

    public $table = "tenant_warehouse_sections";
}
