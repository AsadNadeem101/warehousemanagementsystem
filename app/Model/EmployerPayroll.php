<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EmployerPayroll extends Model
{
    public $table = "employer_payrolls";

    protected $fillable = [
    	'employee_id',
    	'month',
    	'actual_salary',
    	'payable',
    	'deduction',
    	'status',
    	'paid_at'
    ];
}
