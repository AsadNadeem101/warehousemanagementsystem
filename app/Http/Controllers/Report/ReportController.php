<?php

namespace App\Http\Controllers\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Warehouse;
use App\Model\WarehouseAd;
use App\Model\Employee;
use App\Model\Product;
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

        $warehouse_ads = WarehouseAd::all()->count();
    	
   
    	return view('report.admin',compact('tenants','renters','total_users','warehouses','warehouse_ads'));
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
