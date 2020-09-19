<?php

namespace App\Http\Controllers\Plan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Plan;
use App\Model\PlanSubscriptionUser;
use App\Model\WarehouseAd;
use App\DataTables\PlanDataTable;
use Illuminate\Database\QueryException;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Auth; 

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PlanDataTable $dataTable)
    {
        return $dataTable->render('plan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plan.create');
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
        Plan::create($input);
        Alert::success('Plan', 'Data successfully created');
        return redirect()->route('plan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plan = Plan::find($id);
        return view('plan.show',compact('plan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plan = Plan::find($id);
        return view('plan.edit',compact('plan'));
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
        $input = $request->only('name','description','duration','price','status');
        Plan::find($id)->update($input);
        Alert::success('Plan', 'Data successfully updated');
        return redirect()->route('plan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $plan = Plan::find($id)->delete();
            if($plan)
            {
                return redirect()->route('plan.index');
                Alert::success('Plan', 'Data successfully deleted');
            }
        } catch (QueryException $e){
            if($e->getCode() == "23000")
            {
                Alert::error('Plan', 'Other data exist against this plan. Please delete other data first');
                return redirect()->route('employee.index');
            }
        } catch (PDOException $e) {
            Alert::error('Plan', 'Something went wrong. Please contact admin');
            return redirect()->route('plan.index');
        }
    }
    public function selectplan($id)
    {   
        $warehouse_ad_id = $id;
        $selectplan = Plan::all();
        $warehouse_Ad_id = PlanSubscriptionUser::where('warehouse_ad_id',$warehouse_ad_id)->value('warehouse_ad_id');
     
        return view('warehousead.selectplan',compact('selectplan','warehouse_ad_id','warehouse_Ad_id'));
    }

    
    public function subscribePlan(Request $request)
    {   
        $plan_id = $request->id;
        $warehouse_ad_id = $request->warehouse_ad_id;
        $renter_id = Auth::user()->id;
        $warehouse_id = WarehouseAd::where('id',$warehouse_ad_id)->value('warehouse_id');

        $paid = Plan::where('id',$plan_id)->value('price');
        
        $input['renter_id'] = $renter_id;
        $input['warehouse_id'] = $warehouse_id;
        $input['plan_id'] = $plan_id;
        $input['warehouse_ad_id'] = $warehouse_ad_id;
        $input['paid'] = $paid;
        $plan_subscription = PlanSubscriptionUser::create($input);
       return redirect()->route('plansubscriptionuser.index');
        
    }
    public function activatePlan(Request $request)
    {
        $input = $request->all();

        $plan = Plan::where('id',$input['plan_id'])->first();

        $now = Carbon::now();
        $start_date = Carbon::now();
        $end_date = $now->addDays($plan['duration']);

        $input['start_date'] = $start_date;
        $input['end_date'] = $end_date;

        $plan_subscription = PlanSubscriptionUser::create($input);

        return redirect()->route('warehouse.index');
    }

    public function featuredPlans()
    {
        $plan_subscription = PlanSubscriptionUser::where('payment_status','paid')->where('paid','>','0')->where('system_verification','verified')->pluck('warehouse_ad_id');

        $warehouseads = Ad::whereIn($plan_subscription);

        return view('',compact('warehouseads'));
    }
}