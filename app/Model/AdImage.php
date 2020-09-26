<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdImage extends Model
{
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'warehouse_ad_id', 
        'path',
    ];

    public $table = 'ad_images';

    public function warehouse(){
        return $this->belongsTo(Warehouse::class,'warehouse_ad_id');
    }
}
