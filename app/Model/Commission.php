<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'renter_id', 
        'tenant_rent_id', 
        'amount',
        'paid',
        'paid_at',
    ];

    public $table = "commissions";
}
