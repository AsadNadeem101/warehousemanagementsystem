<?php

namespace App\Http\Controllers\Warehouse\Ad\Bid;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\WarehouseAdBid;
use App\Model\WarehouseAd;
use App\Model\Warehouse;
use App\Model\TenantWarehouse;
use App\Model\TenantWarehouseSection;
use App\DataTables\WarehouseAdBidDataTable;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Auth;
class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(WarehouseAdBidDataTable $dataTable)
    {
        return $dataTable->render('warehouseadbid.index');    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $ad = WarehouseAd::find($request->ad_id);

        $tenant_id = Auth::user()->id;
        $renter_id = Warehouse::where('id',$ad->warehouse_id)->value('renter_id');
        return view('website.bid.create',compact('ad','renter_id','tenant_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $warehouse_ad_bid = WarehouseAdBid::create($input);
        Alert::success('Warehouse Bid Ad', 'Data successfully Created');
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bid = WarehouseAdBid::find($id);
        //dd($ad);
        return view('warehouseadbid.show',compact('bid'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('warehouseadbid.edit');
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

    public function rejectBid(Request $request)
    {
        $id = $request->id;
        $rejected_bid = WarehouseAdBid::where('id',$id)->update([
            'status' => 'rejected'
        ]);

        Alert::success('Warehouse Bid Rejected', 'Data successfully Rejected');
        return redirect()->route('warehouseadbid.index');
    }
    
    public function withdrawBid(Request $request)
    {
        $id = $request->id;
        $withdrawn_bid = WarehouseAdBid::where('id',$id)->update([
            'status' => 'withdrawn'
        ]);

        Alert::success('Warehouse Bid withdrawn', 'Data successfully withdrawn');
        return redirect()->route('mybid.index');
    }


    public function checkRemainingMarla($warehouse_id)
    {
        $warehouse_id = $warehouse_id;
        $warehouse = Warehouse::find($warehouse_id);
        $marla_ramaining = $warehouse->marla;
        $tenant_warehouse_sections = TenantWarehouseSection::where('warehouse_id',$warehouse_id)->get();
        foreach ($tenant_warehouse_sections as $key => $tenant_warehouse_section) 
        {
            $marla_ramaining = $marla_ramaining - $tenant_warehouse_section->marla;
        }

        return $marla_ramaining;
    }

    public function acceptBid(Request $request)
    {
        $id = $request->id;
        $warehouse_ad_bid = WarehouseAdBid::find($id);
        $warehouse_ad = WarehouseAd::find($warehouse_ad_bid->warehouse_ad_id); 
      
        $tenant_warehouse = new TenantWarehouse;
        $tenant_warehouse->warehouse_id = $warehouse_ad->warehouse_id;
        $tenant_warehouse->renter_id = $warehouse_ad_bid->renter_id;
        $tenant_warehouse->tenant_id = $warehouse_ad_bid->tenant_id;
        $start_date = Carbon::now();
        $end_date = Carbon::now();
        $end_date = $end_date->add($warehouse_ad->duration, 'month');
        $tenant_warehouse->start_date = $start_date;
        $tenant_warehouse->end_date = $end_date;
        $tenant_warehouse->duration = $warehouse_ad->duration;
        $tenant_warehouse->rent = $warehouse_ad_bid->bid_amount;
        $tenant_warehouse->save();

        $tenant_warehouse_section = new TenantWarehouseSection;

        $section_name = "W".$warehouse_ad->warehouse_id."-R".$warehouse_ad->room."-M".$warehouse_ad->marla;
        $section_description = "Warehouse".$warehouse_ad->warehouse_id."-Room".$warehouse_ad->room."-Marla".$warehouse_ad->marla;

        $tenant_warehouse_section->name = $section_name;
        $tenant_warehouse_section->description = $section_description;
        $tenant_warehouse_section->room = $warehouse_ad->room;
        $tenant_warehouse_section->marla = $warehouse_ad->marla;
        $tenant_warehouse_section->tenant_warehouse_id = $tenant_warehouse->id;
        $tenant_warehouse_section->warehouse_id = $warehouse_ad->warehouse_id;
        $tenant_warehouse_section->save();
        
        $accepted_bid = WarehouseAdBid::where('id',$id)->update([
            'status' => 'approved'
        ]);

        $warehouse_marla_remaining = $this->checkRemainingMarla($warehouse_ad->warehouse_id);

        $warehouse_ads_delete = WarehouseAd::where('marla','>',$warehouse_marla_remaining)->pluck('id');

        WarehouseAd::whereIn('id',$warehouse_ads_delete)->delete(); 

        Alert::success('Warehouse Bid Accepted', 'Data successfully Accepted');
        return redirect()->route('warehouseadbid.index');
    }
}
