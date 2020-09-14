<?php

namespace App\Http\Controllers\WarehouseAdminDashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Warehouse;
use App\User;
use App\Model\TenantWarehouseSection;
use App\Helpers\Helper;
use DB;

class WarehouseAdminDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
     
        $warehouse_id = User::where('id',$id)->value('warehouse_id');
     
        $data = Warehouse::where('id',$warehouse_id)->get();
        
        
        return view('warehouseadmindashboard.index',compact('data'));
    }
    public function warehouseadminsection($id)
    {   
        $data = TenantWarehouseSection::where('warehouse_id',$id)->get();
        foreach ($data as $key => $value) 
        {
            $data[$key]['warehouse_id']= Helper::warehouseIdToName($value['warehouse_id']);
        }
        
        return view('warehouseadmindashboard.section',compact('data'));
    }
    public function warehouseadminsectiondetail($id)
    {   
        $warehouse_admin_section_id = $id;
     
        $details = DB::table('tenant_warehouse_sections')->where('tenant_warehouse_sections.id',$id)
        ->join('tenant_warehouses', 'tenant_warehouse_sections.tenant_warehouse_id', '=', 'tenant_warehouses.id')
        ->select('tenant_warehouse_sections.*','tenant_warehouses.warehouse_id','tenant_warehouses.renter_id','tenant_warehouses.tenant_id','tenant_warehouses.start_date','tenant_warehouses.end_date','tenant_warehouses.duration','tenant_warehouses.rent')
          ->get();
               
        return view('warehouseadmindashboard.show',compact('details','warehouse_admin_section_id'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
