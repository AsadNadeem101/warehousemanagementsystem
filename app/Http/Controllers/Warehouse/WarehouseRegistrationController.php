<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Warehouse;
use App\Model\TenantWarehouseSection;
use App\DataTables\WarehouseRegistrationDataTable;
use Illuminate\Database\QueryException;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;
use App\User;

class WarehouseRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(WarehouseRegistrationDataTable $dataTable)
    {
        return $dataTable->render('warehouseregistration.index');
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

        $activate_warehouse = Warehouse::find($id);
        $activate_warehouse->status = 'active';
        $activate_warehouse->save();
         Alert::success('Warehouse Registation', 'Registration process completed');
         return redirect()->route('warehouseregistration.index');

    }

    public function update1(Request $request, $id)
    {

        $in_activate_warehouse = Warehouse::find($id);
        $in_activate_warehouse->status = 'inactive';
        $in_activate_warehouse->save();
         Alert::success('Warehouse Registation', 'Registration process completed');
         return redirect()->route('warehouseregistration.index');
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
