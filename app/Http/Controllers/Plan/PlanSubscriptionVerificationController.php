<?php

namespace App\Http\Controllers\Plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PlanSubscriptionUser;
use App\DataTables\PlanSubscriptionVerificationDatatable;
use Illuminate\Database\QueryException;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Auth; 
use App\Model\Plan;

class PlanSubscriptionVerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index(PlanSubscriptionVerificationDatatable $dataTable)
    {
        return $dataTable->render('plansubscriptionverification.index');
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

        $subscriptionchargesverification = PlanSubscriptionUser::find($id);
        $id = $subscriptionchargesverification->id;
        $system_verification = $subscriptionchargesverification->system_verification;
        return view('plansubscriptionverification.show',compact('subscriptionchargesverification','id','system_verification'));
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
        $plan_id = $subscriptioncharges->plan_id;

    
        $duration = Plan::where('id',$plan_id)->value('duration');
        $now = Carbon::now();
        $start_date = Carbon::now();
        $end_date = $now->addDays($duration);
         
       $subscriptioncharges->start_date = $start_date;
       $subscriptioncharges->end_date = $end_date;
       $subscriptioncharges->system_verification = 'verified';
       $subscriptioncharges->save();

        Alert::success('Subscription Charges', 'Payment verfication process completed');
         return redirect()->route('plansubscriptionverification.index');
    }
    public function update1(Request $request, $id)
    {
        $subscriptioncharges = PlanSubscriptionUser::find($id);
        $subscriptioncharges->payment_status = 'nopaid';
        $subscriptioncharges->system_verification = 'verified';
        $subscriptioncharges->save();

        Alert::success('Subscription Charges', 'Payment verfication process completed');
         return redirect()->route('plansubscriptionverification.index');
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
