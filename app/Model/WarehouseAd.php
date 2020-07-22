<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WarehouseAd extends Model
{
    public $table = "warehouse_ads";

    protected $fillable = [
    	'title',
    	'warehouse_id',
    	'description',
    	'img_path',
    	'marla',
    	'status'
    ];
}
