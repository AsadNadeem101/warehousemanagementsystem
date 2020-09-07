<?php

namespace App\Http\Controllers\TenantRent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Model\TenantRent;
use App\DataTables\TenantRentDataTable;
use RealRashid\SweetAlert\Facades\Alert;
class TenantRentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TenantRentDataTable $dataTable)
    {
        return $dataTable->render('tenantrent.index');
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

      //  dd($request);

       // $input = $request->only('name','description','location','marla','room','renter_id','status');
       //  Warehouse::find($id)->update($input);
       //  Alert::success('Warehouse', 'Data successfully updated');
       //  return redirect()->route('warehouse.index');




        //     $this->validate($request, [
        //     'name' => 'required',
        // ]);


        $tenantrent = TenantRent::find($id);
        
        $tenantrent->account_number = $request->input('account_number');
        $tenantrent->paid_at = $request->input('paid_at');
        $tenantrent->payment_status = 'paid';
        $tenantrent->save();

        Alert::success('TenantRent', 'Payment is in verfication process');
         return redirect()->route('tenantrent.index');

        // return redirect()->route('plants.index')
        //                 ->with('success','Plant updated successfully');
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
        $tenantrent = TenantRent::find($id);
        return view('tenantrent.payment',compact('tenantrent'));
    }

     public function paymentupdate(Request $request)
    {
        $id = $request->id;
        $tenantrent = TenantRent::find($id);
        return view('tenantrent.payment',compact('tenantrent'));
    }
}


// $id = $request->id;

//         $tenantrent = TenantRent::find($id);
//         dd($tenantrent);
//         return view('tenantrent.payment',compact('tenantrent'));

//         return view('tenantrent.payment');