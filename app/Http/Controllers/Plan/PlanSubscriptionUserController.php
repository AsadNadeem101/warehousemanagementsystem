<?php

namespace App\Http\Controllers\Plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PlanSubscriptionUser;
use App\DataTables\PlanSubscriptionUserDatatable;
use Illuminate\Database\QueryException;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Auth; 
class PlanSubscriptionUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PlanSubscriptionUserDatatable $dataTable)
    {
        return $dataTable->render('plansubscriptionuser.index');
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
        $subscriptioncharges = PlanSubscriptionUser::find($id);        
        $subscriptioncharges->account_number = $request->input('account_number');
        $subscriptioncharges->paid_at = $request->input('paid_at');
        $subscriptioncharges->payment_status = 'paid';
        $subscriptioncharges->system_verification = 'pending';
        $subscriptioncharges->save();

        Alert::success('Subscription Charges', 'Payment is in verfication process');
         return redirect()->route('plansubscriptionuser.index');
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
        $subscriptioncharges = PlanSubscriptionUser::find($id);
        return view('plansubscriptionuser.payment',compact('subscriptioncharges'));
    }
}
