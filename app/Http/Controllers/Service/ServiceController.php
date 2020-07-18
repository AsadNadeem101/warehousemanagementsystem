<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Service;
use App\DataTables\ServiceDataTable;
use RealRashid\SweetAlert\Facades\Alert;
use App\Model\WarehouseServiceSubscription;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ServiceDataTable $dataTable)
    {
        return $dataTable->render('service.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
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
        Service::create($input);
        Alert::success('Service', 'Data successfully created');
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service = Service::find($id);
        return view('service.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('service.edit',compact('service'));
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
        $input = $request->only('name','description');
        Service::find($id)->update($input);
        Alert::success('Service', 'Data successfully updated');
        return redirect()->route('service.index');
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
            $service = Service::find($id)->delete();
            if($service)
            {
                return redirect()->route('service.index');
                Alert::success('Service', 'Data successfully deleted');
            }
        } catch (QueryException $e){
            if($e->getCode() == "23000")
            {
                Alert::error('Service', 'Other data exist against this employee. Please delete other data first');
                return redirect()->route('employee.index');
            }
        } catch (PDOException $e) {
            Alert::error('Service', 'Something went wrong. Please contact admin');
            return redirect()->route('employee.index');
        } 
    }

    public function subscribeService(Request $request)
    {
        $input = $request->all();
        WarehouseServiceSubscription::create($input);

        Alert::success('Service', 'Service subscribed against warehouse');
        return redirect()->route('warehouse.index');
    }
}
