<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::group(['middleware' => 'auth'], function (){
	Route::get('/', 'HomeController@index');


	//Attendance
    Route::get('markAttendancePage','Attendance\AttendanceController@markAttendance');
    Route::get('mark/{attStatus}/{id}','Attendance\AttendanceController@mark');
    Route::get('viewattendance/{days}','Attendance\AttendanceController@view');
    Route::get('createattendancesheet','Attendance\AttendanceController@createsheet'); 
    Route::get('viewattendancedetail/{id}', 'Attendance\AttendanceController@viewattendancedetail');

    //Warehouse
    Route::resource('warehouse', 'Warehouse\WarehouseController');
	
    //Employee
	Route::resource('employee', 'Employee\EmployeeController');

});

