<?php

namespace App\Http\Controllers\RenterDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\Warehouse;
use App\Model\TenantWarehouseSection;
use App\User;
use Auth;
use App\Helpers\Helper;
use DB;

class RenterDashboardController extends Controller
{
    public function index()
    {	
    	$id = Auth::user()->id;
    	$data = Warehouse::where('renter_id',$id)->get();
    	
    	return view('renterdashboard.index',compact('data'));
    	
    }

    public function rentersection($id)
    {	
    	$data = TenantWarehouseSection::where('warehouse_id',$id)->get();
    	foreach ($data as $key => $value) 
    	{
            $data[$key]['warehouse_id']= Helper::warehouseIdToName($value['warehouse_id']);
        }
    	
    	return view('renterdashboard.section',compact('data'));
    }
    public function rentersectiondetail($id)
    {	

    	$details = DB::table('tenant_warehouse_sections')->where('tenant_warehouse_sections.id',$id)
    	->join('tenant_warehouses', 'tenant_warehouse_sections.warehouse_id', '=', 'tenant_warehouses.warehouse_id')
    	->select('tenant_warehouse_sections.*','tenant_warehouses.warehouse_id','tenant_warehouses.renter_id','tenant_warehouses.tenant_id','tenant_warehouses.start_date','tenant_warehouses.end_date','tenant_warehouses.duration','tenant_warehouses.rent')
          ->get();
       
    	return view('renterdashboard.show',compact('details'));
    }
}
