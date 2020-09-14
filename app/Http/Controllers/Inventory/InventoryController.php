<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Inventory;
use App\Model\TenantWarehouseSection;
use App\Model\Product;
use App\Model\TenantWarehouse;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class InventoryController extends Controller
{
    // public function updateInventory(Request $request)
    // {
    // 	$inventory = Inventory::create($request);

    // 	return redirect()->route('warehouse.index');
    // } 

    public function addinventory($id)
    {		
		      
        $tenant_warehouse_section_id = $id;
        
        $tenant_warehouse_id = TenantWarehouseSection::where('id',$tenant_warehouse_section_id)->value('tenant_warehouse_id');
        $warehouse_id = TenantWarehouse::where('id',$tenant_warehouse_id)->value('warehouse_id');
        $tenant_id = TenantWarehouse::where('id',$tenant_warehouse_id)->value('tenant_id');
        $warehouse_admin = Auth::user()->id; 
        $warehouse_ad_id = TenantWarehouse::where('id',$tenant_warehouse_id)->value('warehouse_ad_id'); 
    
        $get_products = Product::where('warehouse_ad_id',$warehouse_ad_id)->pluck('name','id');
        
        return view('inventory.add',compact('get_products','tenant_warehouse_section_id','warehouse_id','tenant_id','warehouse_admin'));
    } 
    public function store(Request $request)
    {

       $input = $request->all();
        Inventory::create($input);
        Alert::success('Inventory', 'Data successfully created');
        return redirect('warehouseadmindashboard');        
    }


}