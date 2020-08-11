<?php

namespace App\Http\Controllers\Warehouse\Ad\Bid;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\WarehouseAdBid;
use App\Model\WarehouseAd;
use App\Model\Warehouse;
use App\DataTables\WarehouseAdBidDataTable;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( WarehouseAdBidDataTable $dataTable)
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
}
