<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 
        'tenant_warehouse_section_id', 
        'warehouse_id',
        'tenant_id',
        'in',
        'out',
        'warehouse_admin'
    ];

    public $table = "inventories";
}
