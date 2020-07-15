<?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Warehouse;
use App\DataTables\WarehouseDataTable;
use Illuminate\Database\QueryException;
use RealRashid\SweetAlert\Facades\Alert;
use Auth;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(WarehouseDataTable $dataTable)
    {
        return $dataTable->render('warehouse.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('warehouse.create');
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
        $input['renter_id'] = Auth::user()->id;
        Warehouse::create($input);
        Alert::success('Warehouse', 'Data successfully created');
        return redirect()->route('warehouse.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $warehouse = Warehouse::find($id);
        return view('warehouse.show',compact('warehouse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $warehouse = Warehouse::find($id);
        return view('warehouse.edit',compact('warehouse'));
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
        $input = $request->only('name','description','location','marla','room','renter_id','status');
        Warehouse::find($id)->update($input);
        Alert::success('Warehouse', 'Data successfully updated');
        return redirect()->route('warehouse.index');
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
            $warehouse = Warehouse::find($id)->delete();
            if($warehouse)
            {
                return redirect()->route('warehouse.index');
                Alert::success('Warehouse', 'Data successfully deleted');
            }
        } catch (QueryException $e){
            if($e->getCode() == "23000")
            {
                Alert::error('Warehouse', 'Other data exist against this warehouse. Please delete other data first');
                return redirect()->route('warehouse.index');
            }
        } catch (PDOException $e) {
            Alert::error('Warehouse', 'Something went wrong. Please contact admin');
            return redirect()->route('warehouse.index');
        }
    }
}
