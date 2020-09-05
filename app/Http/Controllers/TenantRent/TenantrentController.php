<?php

namespace App\Http\Controllers\TenantRent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TenantRent;
use App\DataTables\TenantRentDataTable;
use Illuminate\Database\QueryException;
use RealRashid\SweetAlert\Facades\Alert;

class TenantrentController extends Controller
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

    public function payment(Request $request)
    {
        $id = $request->id;
        $tenantrent = TenantRent::find($id);
        return view('tenantrent.payment',compact('tenantrent'));

        //return view('tenantrent.payment');
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
