<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Inventory;

class InventoryController extends Controller
{
    public function updateInventory(Request $request)
    {
    	$inventory = Inventory::create($request);

    	return redirect()->route('warehouse.index');
    } 
}
