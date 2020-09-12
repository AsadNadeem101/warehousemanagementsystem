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

Route::get('/index', 'Warehouse\Ad\AdController@adIndex');
Route::get('/', 'Warehouse\Ad\AdController@adIndex')->name('website');  
Route::get('/termsandconditions', function () {
    return view('website/termsandconditions');
});
Auth::routes();

Route::group(['middleware' => 'auth'], function (){

	Route::get('/home', 'HomeController@index');

    
    
    Route::get('/ad_detail/{ad_id}', 'Warehouse\Ad\AdController@showOnWeb');

	//Attendance
    Route::get('markAttendancePage','Attendance\AttendanceController@markAttendance');
    Route::get('mark/{attStatus}/{id}','Attendance\AttendanceController@mark');
    Route::get('viewattendance/{days}','Attendance\AttendanceController@view');
    Route::get('createattendancesheet','Attendance\AttendanceController@createsheet'); 
    Route::get('viewattendancedetail/{id}', 'Attendance\AttendanceController@viewattendancedetail');

    //Warehouse
    Route::resource('warehouse', 'Warehouse\WarehouseController');

    //Create Warehouse Admin
    Route::resource('warehouseadmin', 'Warehouse\WarehouseAdminController');
    Route::get('/warehouseadmin/{id}/create', 'Warehouse\WarehouseAdminController@create');
    
    //Add Inventory
    Route::get('/addinventory/{id}/add', 'Inventory\InventoryController@addinventory');
    //Route::get('/storeinventory', 'Inventory\InventoryController@store');
    Route::resource('inventory', 'Inventory\InventoryController');
    

     Route::resource('warehouse', 'Warehouse\WarehouseController');
	
    //WarehouseAds
    Route::resource('warehousead', 'Warehouse\Ad\AdController');

    //My bids
    Route::resource('mybid', 'Warehouse\Ad\Bid\MyBidController');
    
    //WarehouseAdBid
    Route::resource('warehouseadbid', 'Warehouse\Ad\Bid\BidController');
    Route::get('ad_detail/warehouseadbid/create/{ad_id}','Warehouse\Ad\Bid\BidController@create');

    Route::get('warehouseadbid/{id}/reject','Warehouse\Ad\Bid\BidController@rejectBid');

    Route::get('warehouseadbid/{id}/accept','Warehouse\Ad\Bid\BidController@acceptBid');

    Route::get('warehouseadbid/{id}/withdraw','Warehouse\Ad\Bid\BidController@withdrawBid');
    
    //Tenant dashboard

    Route::get('tenantdashboard','TenantDashboard\TenantDashboardController@index');
    Route::get('tenantsection/{id}','TenantDashboard\TenantDashboardController@tenantsection');
    Route::get('tenantsectiondetail/{id}','TenantDashboard\TenantDashboardController@tenantsectiondetail');

    //Renter Dashboard
     Route::get('renterdashboard','RenterDashboard\RenterDashboardController@index');
     Route::get('rentersection/{id}','RenterDashboard\RenterDashboardController@rentersection');
     Route::get('rentersectiondetail/{id}','RenterDashboard\RenterDashboardController@rentersectiondetail');

    //WarehouseAdminDashobard
    
    Route::get('warehouseadmindashboard','WarehouseAdminDashboard\WarehouseAdminDashboardController@index'); 

    Route::get('warehouseadminsection/{id}','WarehouseAdminDashboard\WarehouseAdminDashboardController@warehouseadminsection');

    Route::get('warehouseadminsectiondetail/{id}','WarehouseAdminDashboard\WarehouseAdminDashboardController@warehouseadminsectiondetail');
    //Employee
	Route::resource('employee', 'Employee\EmployeeController');

    //TenantRent
    Route::resource('tenantrent', 'TenantRent\TenantrentController');
    Route::get('tenantrent/{id}/payment', 'TenantRent\TenantrentController@payment');
    
    //Select Plan
    Route::get('selectplan/{id}', 'Plan\PlanController@selectplan');



    //TenantRentVerification
    Route::resource('tenantrentverification', 'TenantRent\TenantrentverificationController');
     Route::get('tenantrent/{id}/detail', 'TenantRent\TenantrentverificationController@show');
     Route::get('tenantrent/{id}/verification', 'TenantRent\TenantrentverificationController@update');

     Route::get('tenantrent/{id}/verifications', 'TenantRent\TenantrentverificationController@update1');

    //Service
    Route::resource('service', 'Service\ServiceController');
    Route::group(['prefix' => 'service'], function (){
        Route::post('subscribe_service','Service\ServiceController@subscribeService')->name('subscribe_service');
    });

    //Service Subscription Charges
    Route::resource('servicesubscriptioncharges', 'ServiceSubscriptionCharges\ServiceSubscriptionChargesController');
    Route::get('servicecharges/{id}/payment', 'ServiceSubscriptionCharges\ServiceSubscriptionChargesController@payment');

     //Service Subscription Charges Veification

    Route::resource('servicechargesverification', 'ServiceSubscriptionCharges\ServiceschargesverificationController');
     Route::get('servicecharges/{id}/detail', 'ServiceSubscriptionCharges\ServiceschargesverificationController@show');
      Route::get('servicecharges/{id}/verification', 'ServiceSubscriptionCharges\ServiceschargesverificationController@update');
      Route::get('servicecharges/{id}/verifications', 'ServiceSubscriptionCharges\ServiceschargesverificationController@update1');


    //Report
    Route::group(['prefix' => 'report'], function (){
        Route::get('/admin', 'Report\ReportController@adminReport');
        Route::get('/tenant', 'Report\ReportController@tenantReport');
        Route::get('/renter', 'Report\ReportController@renterReport');
    });    

    //Plan
    Route::resource('plan', 'Plan\PlanController');

    //Product
    Route::resource('product', 'Product\ProductController');
    Route::group(['prefix' => 'product'], function (){
        Route::get('add/warehouse/{id}','Product\ProductController@create');
    });

    //Ad
    Route::resource('ad', 'Warehouse\Ad\AdController');
    

    //Profile
    Route::group(['prefix' => 'profile'], function (){
        Route::get('',function(){
            return view('profile.index');
        });
        Route::get('change-password',function(){
            return view('profile.change-password');
        });
        Route::post('change_password','Auth\ForgotPasswordController@changePassword')->name('change_password');

    });

    Route::group(['prefix' => 'users'], function (){
        Route::get('/','HomeController@getUserIndex');
    });


    Route::get('logout','Auth\LoginController@logout');
});

