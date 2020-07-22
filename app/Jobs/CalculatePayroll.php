<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Model\Attendence;
use App\Model\Employee;
use App\Model\EmployerPayroll;
use Carbon\Carbon;

class CalculatePayroll implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $employees = Employee::all();

        foreach ($employees as $key => $employee) {
            $absents = Attendence::whereMonth('created_at',Carbon::now()->month)
                        ->where('employee_id',$employee['id'])
                        ->where('status',0)
                        ->count();
            $actual_salary = $employee['salary'];
            $per_day_salary = $actual_salary / 30;
            $payable = $actual_salary - ($per_day_salary * $absents);
            $deduction = $per_day_salary * $absents;

            $employer_payroll = [
                'employee_id'   => $employee['id'],
                'month'         => Carbon::now()->month,
                'actual_salary' => $actual_salary,
                'payable'       => $payable,
                'deduction'     => $deduction,
                'status'        => 'pending',
            ]

            EmployerPayroll::create($employer_payroll);
        }
    }
}
