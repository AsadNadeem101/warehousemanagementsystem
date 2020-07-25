<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Warehouse;
use App\Model\Employee;
use App\Model\Product;
use App\Model\Commission;
use App\Model\ServiceSubscriptionCharges;
use App\Model\PlanSubscriptionUser;
use App\User;

class ReportController extends Controller
{
    public function adminReport()
    {
    	$tenants = User::where('type','tenant')->count();

    	$renters = User::where('type','renter')->count();

    	$total_users = User::all()->count();

    	$warehouses = Warehouse::all()->count();

    	$sales_by_service = ServiceSubscriptionCharges::sum('paid');

    	$sales_by_plan = PlanSubscriptionUser::sum('paid');

    	$sales_by_commission = Commission::sum('paid');

    	$total_sales = $sales_by_service + $sales_by_plan + $sales_by_commission;

    	return view('report.admin',compact('tenants','renters','total_users','warehouses','sales_by_service','sales_by_plan','sales_by_commission','total_sales'));
    }

    public function warehouseAdminReport()
    {
        dd("under working");
    }

    public function tenantReport()
    {
        dd("under working");
    }

    public function renterReport()
    {
        dd("under working");
    }
}
