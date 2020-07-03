<?php

namespace App\Http\Controllers\Attendance;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\carbon;
use App\Model\Employee;
use App\Model\Attendance;
use Datatables;
class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employ = Attendance::whereDate('created_at',Carbon::today())->where('status',0);
        return Datatables::of($employ)->addColumn('action',function($employ){
            return '<a href="../mark/'.'present/'.$employ->employee_id.'" class="btn btn-xs btn-primary"><i class="fa fa-check"></i> Mark</a>';
        })->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function markAttendance()
    {
        $users = Employee::all();
        // $attendances = attendance::all();
        $attendances = Attendance::whereDate('created_at', '>=', Carbon::today())->get();
        //echo($attendance);
        if($users == '[]')
        {
            return view('Attendance.markAttendancePage')->with('err','No user exist');
        }
        else
        {
            if ($attendances == '[]') 
            {
                return view('Attendance.markAttendancePage' , compact('users'));   
            }
            else
            {
                return view('Attendance.markAttendancePage' , compact('users','attendances'));
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function mark(Request $request)
    {
        $user =Employee::find($request->id);
          
        $attendanceObj = Attendance::where('employee_id',$user->id)->where('created_at', '>=', Carbon::today())->first();
        // $attendanceObj->employ_id = $request->id;
        // $attendanceObj->employ_name = $user->name;
        $attendanceObj->status = 1;
        $attendanceObj->save();
        
        return redirect('/markAttendancePage');
    }

    public function view(Request $request)
    {
        if($request->days == 'today')
        {
            $attendances = Attendance::whereDate('created_at', '>=', Carbon::today())->paginate(15);
            return view('Attendance.viewTodayAttendance' , compact('attendances'));
        }
    }

    public function createsheet()
    {
        $users = Employee::get();
        foreach ($users as $key => $value) {
            $attendances = new Attendance;
            $attendances->employee_id = $value->id;
            $attendances->employee_name = $value->name;
            $attendances->status = 0;
            $attendances->save();
        }
        return redirect('/markAttendancePage');
    }
    public function viewattendancedetail(Request $request)
    {
        $attendanceObj = Attendance::where('employee_id',$request->id)->paginate(10);
        return view('Attendance.viewAttendanceDetail')->with('attendances',$attendanceObj);
    }

}
