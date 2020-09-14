<?php

namespace App\Http\Controllers\TenantDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TenantWarehouse;
use App\Model\TenantWarehouseSection;
use App\User;
use Auth;
use App\Helpers\Helper;
use DB;

class TenantDashboardController extends Controller
{
    public function index()
    {	
    	$id = Auth::user()->id;
    	$data = TenantWarehouse::where('tenant_id',$id)->get();
    	
    	foreach ($data as $key => $value) 
    	{
            $data[$key]['warehouse_id']= Helper::warehouseIdToName($value['warehouse_id']);
        }

    	return view('tenantdashboard.index',compact('data'));
    	
    }
    public function tenantsection($id)
    {	
    	$data = TenantWarehouseSection::where('tenant_warehouse_id',$id)->get();
    	foreach ($data as $key => $value) 
    	{
            $data[$key]['warehouse_id']= Helper::warehouseIdToName($value['warehouse_id']);
        }
    	
    	return view('tenantdashboard.section',compact('data'));
    }
    public function tenantsectiondetail($id)
    {	
        $tenant_warehouse_section_id = $id;
     
    	$details = DB::table('tenant_warehouse_sections')->where('tenant_warehouse_sections.id',$id)
    	->join('tenant_warehouses', 'tenant_warehouse_sections.tenant_warehouse_id', '=', 'tenant_warehouses.id')
    	->select('tenant_warehouse_sections.*','tenant_warehouses.warehouse_id','tenant_warehouses.renter_id','tenant_warehouses.tenant_id','tenant_warehouses.start_date','tenant_warehouses.end_date','tenant_warehouses.duration','tenant_warehouses.rent')
          ->get();
               
    	return view('tenantdashboard.show',compact('details','tenant_warehouse_section_id'));
    }
}
