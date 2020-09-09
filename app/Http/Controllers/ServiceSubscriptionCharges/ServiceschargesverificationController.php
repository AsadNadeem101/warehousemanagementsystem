<?php

namespace App\Http\Controllers\ServiceSubscriptionCharges;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ServiceSubscriptionCharges;
use App\DataTables\ServiceChargesVerificationDataTable;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceschargesverificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ServiceChargesVerificationDataTable $dataTable)
    {
        return $dataTable->render('servicechargesverification.index');
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
        $servicechargesverification = ServiceSubscriptionCharges::find($id);
        $id = $servicechargesverification->id;
        $system_verification = $servicechargesverification->system_verification;
        return view('servicechargesverification.show',compact('servicechargesverification','id','system_verification'));
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
        $servicecharges = ServiceSubscriptionCharges::find($id);
        $servicecharges->system_verification = 'verified';
        $servicecharges->save();

        Alert::success('Service Charges', 'Payment verfication process completed');
         return redirect()->route('servicechargesverification.index');
    }

    public function update1(Request $request, $id)
    {
        $servicecharges = ServiceSubscriptionCharges::find($id);
        $servicecharges->payment_status = 'nopaid';
        $servicecharges->system_verification = 'verified';
        $servicecharges->save();

        Alert::success('RenterServicePayment', 'Payment verfication process completed');
         return redirect()->route('tenantrentverification.index');
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
