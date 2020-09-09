<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\DataTables\ProductDataTable;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render('product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $warehouse_id = $request->id;
        return view('product.create',compact('warehouse_id'));
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
        Product::create($input);
        Alert::success('Product', 'Data successfully created');
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
        $product = Product::find($id);
        return view('product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
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
        $input = $request->only('name','description','manufacturer','quantity','warehouse_id');
        Product::find($id)->update($input);
        Alert::success('Product', 'Data successfully updated');
        return redirect()->route('product.index');
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
            $product = Product::find($id)->delete();
            if($product)
            {
                return redirect()->route('product.index');
                Alert::success('Product', 'Data successfully deleted');
            }
        } catch (QueryException $e){
            if($e->getCode() == "23000")
            {
                Alert::error('Product', 'Other data exist against this product. Please delete other data first');
                return redirect()->route('product.index');
            }
        } catch (PDOException $e) {
            Alert::error('Product', 'Something went wrong. Please contact admin');
            return redirect()->route('product.index');
        } 
    }
}
