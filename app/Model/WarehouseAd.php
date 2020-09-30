<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WarehouseAd extends Model
{
    public $table = "warehouse_ads";

    protected $fillable = [
    	'title',
    	'warehouse_id',
        'renter_id',
    	'description',
    	'img_path',
    	'marla',
    	'room',
    	'status',
    	'duration',
    	'rent',
        'category',
    ];

    public function warehouse(){
        return $this->belongsTo(Warehouse::class,'warehouse_id');
    }

    public function adImage(){
        return $this->hasMany(AdImage::class);
    }
}
