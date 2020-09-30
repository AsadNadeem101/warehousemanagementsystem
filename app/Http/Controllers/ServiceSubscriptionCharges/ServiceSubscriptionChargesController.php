<?php

namespace App\Http\Controllers\ServiceSubscriptionCharges;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\ServiceSubscriptionCharges;
use App\DataTables\TenantRentDataTable;
use RealRashid\SweetAlert\Facades\Alert;
use App\DataTables\ServiceSubscriptionChargesDataTable;

class ServiceSubscriptionChargesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ServiceSubscriptionChargesDataTable $dataTable)
    {
        return $dataTable->render('servicesubscriptioncharges.index');
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
        $request->validate([
            'account_number' => 'required|regex:/^[1-9][0-9]{15}$/',
        ]);
        
        $servicecharges = ServiceSubscriptionCharges::find($id);        
        $servicecharges->account_number = $request->input('account_number');
        $servicecharges->paid_at = $request->input('paid_at');
        $servicecharges->payment_status = 'paid';
        $servicecharges->system_verification = 'pending';
        $servicecharges->save();

        Alert::success('Service Charges', 'Payment is in verfication process');
         return redirect()->route('servicesubscriptioncharges.index');
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
    public function payment(Request $request)
    {
        $id = $request->id;
        $servicecharges = ServiceSubscriptionCharges::find($id);
        return view('servicesubscriptioncharges.payment',compact('servicecharges'));
    }
}
