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
Route::get('/privacypolicy', function () {
    return view('website/privacypolicy');
});
Route::get('/about', function () {
    return view('website/about');
});
Route::get('/faqs', function () {
    return view('website/faqs');
});
Route::get('/our_services', function () {
    return view('website/our_service');
});


Route::get('/contact', function () {
    return view('website/contact/index');
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

    //Employee Payroll
     Route::resource('employeepayroll', 'Employee\EmployeePayrollController');
    Route::get('salaries/{id}/payment', 'Employee\EmployeePayrollController@payment');


    //Create Warehouse Admin
    Route::resource('warehouseadmin', 'Warehouse\WarehouseAdminController');
    Route::get('/warehouseadmin/{id}/create', 'Warehouse\WarehouseAdminController@create');
    
    //Add Inventory
    Route::get('/addinventory/{id}/add', 'Inventory\InventoryController@addinventory');
    
    Route::get('/remaininginventory/{id}/remaining', 'Inventory\InventoryController@remaininginventory');

    Route::post('/remaininginventorycheck', 'Inventory\InventoryController@checkRemainingInventory')->name('inventory.checkremaing');
    
    //Warehouse Registration
    Route::resource('warehouseregistration', 'Warehouse\WarehouseRegistrationController');
    Route::get('warehouseregistration/{id}/activate', 'Warehouse\WarehouseRegistrationController@update');
    Route::get('warehouseregistration/{id}/inactivate', 'Warehouse\WarehouseRegistrationController@update1');

    //Inventory
    Route::resource('inventory', 'Inventory\InventoryController');
    
    //Warehouse
     Route::resource('warehouse', 'Warehouse\WarehouseController');
	
    //WarehouseAds
    Route::resource('warehousead', 'Warehouse\Ad\AdController');
    
    //WarehouseAds Approval
     Route::resource('warehouseadapproval', 'Warehouse\Ad\WarehouseAdApprovalController');
     Route::get('warehouseadapproval/{id}/activate', 'Warehouse\Ad\WarehouseAdApprovalController@update');
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

    //Super Admin Dashboard
     Route::get('superadmindashboard','SuperAdminDashboard\SuperAdminDashboardController@index');
     Route::get('warehousesection/{id}','SuperAdminDashboard\SuperAdminDashboardController@warehousesection');
     Route::get('warehousesectiondetail/{id}','SuperAdminDashboard\SuperAdminDashboardController@warehousesectiondetail');


    //WarehouseAdminDashobard
    
    Route::get('warehouseadmindashboard','WarehouseAdminDashboard\WarehouseAdminDashboardController@index'); 

    Route::get('warehouseadminsection/{id}','WarehouseAdminDashboard\WarehouseAdminDashboardController@warehouseadminsection');

    Route::get('warehouseadminsectiondetail/{id}','WarehouseAdminDashboard\WarehouseAdminDashboardController@warehouseadminsectiondetail')->name('warehouse_section');


    //Employee
	Route::resource('employee', 'Employee\EmployeeController');

    //TenantRent
    Route::resource('tenantrent', 'TenantRent\TenantrentController');
    Route::get('tenantrent/{id}/payment', 'TenantRent\TenantrentController@payment');
    
    //Select Plan
    Route::get('selectplan/{id}', 'Plan\PlanController@selectplan');
    Route::get('/warehousead/{warehouse_ad_id}/subscribeplan/{id}', 'Plan\PlanController@subscribePlan')->name('subscribe');

   
    //Plan Subscription
    Route::resource('plansubscriptionuser', 'Plan\PlanSubscriptionUserController');
    Route::get('plansubscriptioncharges/{id}/payment', 'Plan\PlanSubscriptionUserController@payment');
    
    //Plan Subscription Verification
     Route::resource('plansubscriptionverification', 'Plan\PlanSubscriptionVerificationController');
     Route::get('plansubscription/{id}/detail', 'Plan\PlanSubscriptionVerificationController@show');

    Route::get('subscriptioncharges/{id}/verification', 'Plan\PlanSubscriptionVerificationController@update');

    Route::get('subscriptioncharges/{id}/verifications', 'Plan\PlanSubscriptionVerificationController@update1');


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

