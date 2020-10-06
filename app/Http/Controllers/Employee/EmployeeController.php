<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Employee;
use App\User;

use App\DataTables\EmployeeDataTable;
use Illuminate\Database\QueryException;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(EmployeeDataTable $dataTable)
    {
        return $dataTable->render('employee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $warehouses = User::find($id)->warehouses()->pluck('name','id');
        return view('Employee.create',compact('warehouses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|email|unique:users',
            'bio' => 'required|max:50',
            'cnic' => 'required|regex:/^[1-9][0-9]{12}$/|unique:users',
            'phone' => 'required|regex:/^(03)[0-9]{9}$/',
            'salary'=> 'required',
        ]);

        $input = $request->all();
        $employer = Employee::create($input);

        $employer->assignRole('warehouse_admin');

        Alert::success('Employee', 'Data successfully created');
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view('Employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('Employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $request->validate([
            'name' => 'required|max:20',
            'email' => 'required|email|unique:users',
            'bio' => 'required|max:50',
            'cnic' => 'required|regex:/^[1-9][0-9]{12}$/',
            'phone' => 'required|regex:/^(03)[0-9]{9}$/',
            'salary'=> 'required',
        ]);
        
        $input = $request->only('name','email','bio','type','cnic','phone','salary');
        Employee::find($id)->update($input);
        Alert::success('Employee', 'Data successfully updated');
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $employee = Employee::find($id)->delete();
            if($employee)
            {
                return redirect()->route('employee.index');
                Alert::success('Employee', 'Data successfully deleted');
            }
        } catch (QueryException $e){
            if($e->getCode() == "23000")
            {
                Alert::error('Employee', 'Other data exist against this employee. Please delete other data first');
                return redirect()->route('employee.index');
            }
        } catch (PDOException $e) {
            Alert::error('Employee', 'Something went wrong. Please contact admin');
            return redirect()->route('employee.index');
        }   
    }
}
