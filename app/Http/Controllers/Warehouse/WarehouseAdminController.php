        <?php

namespace App\Http\Controllers\Warehouse;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;


class WarehouseAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $dataTable->render('warehouse.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $warehouse_id = $id;
        return view('warehouseadmin.create', compact('warehouse_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|same:confirm-password|min:8',
            'cnic' => 'required|regex:/^[1-9][0-9]{12}$/', 'unique:users',
            'phone' => 'required|regex:/^(03)[0-9]{9}$/',
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['type'] = $request->input('type');
        $input['warehouse_id'] = $request->input('warehouse_id');
        $warehouse_admin = User::create($input);
        Alert::success('Warehouse Admin', 'Warehouse Admin successfully created');
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
