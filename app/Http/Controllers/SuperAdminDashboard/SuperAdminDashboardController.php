<?php

namespace App\Http\Controllers\SuperAdminDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Warehouse;
use App\Model\TenantWarehouseSection;
use App\Helpers\Helper;
use DB;

class SuperAdminDashboardController extends Controller
{
    public function index()
    {	
    	$warehouses = Warehouse::all();

    	return view('superadmindashboard.index',compact('warehouses'));

    	
    }
    public function warehousesection($id)
    {	
    	$data = TenantWarehouseSection::where('warehouse_id',$id)->get();
    	foreach ($data as $key => $value) 
    	{
            $data[$key]['warehouse_id']= Helper::warehouseIdToName($value['warehouse_id']);
        }
 
    	return view('superadmindashboard.section',compact('data'));
    }

    public function warehousesectiondetail($id)
    {	

    	$details = DB::table('tenant_warehouse_sections')->where('tenant_warehouse_sections.id',$id)
    	->join('tenant_warehouses', 'tenant_warehouse_sections.warehouse_id', '=', 'tenant_warehouses.warehouse_id')
    	->select('tenant_warehouse_sections.*','tenant_warehouses.warehouse_id','tenant_warehouses.renter_id','tenant_warehouses.tenant_id','tenant_warehouses.start_date','tenant_warehouses.end_date','tenant_warehouses.duration','tenant_warehouses.rent')
          ->get();
       
    	return view('superadmindashboard.show',compact('details'));
    }
}
