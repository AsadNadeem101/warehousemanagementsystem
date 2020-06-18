<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'bio',
        'type',
        'cnic',
        'phone',
        'salary',
        'status'
    ];

    public $table = "employers";
}
