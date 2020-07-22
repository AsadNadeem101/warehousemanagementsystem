<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'description', 
        'location',
        'marla',
        'room',
        'status',
        'renter_id'
    ];

    public $table = "warehouses";
}
