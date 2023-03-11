<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Models\SupplierData;
use App\Models\User;

class SupplierDataController extends Controller
{
    public function index(SupplierData $supplier, User $user, Item $item)
    {
        $suppliers = $supplier->all();
        $users = $user->all();
        $items = $item->all();
        
        


        return view('pages.supplier', [
            'suppliers' => $suppliers,
            'users' => $users,
            'items' => $items,
        ]

        
        );
    }

    public function create( Request $request, SupplierData $supplierData)
    {
        $data = $request->all();
        // return $data;

        $supplierData = new SupplierData;
        $supplierData->user_id = $request->user_id;
        $supplierData->delivery_date = $request->delivery_date;
        $supplierData->item_number = $request->item_number;
        $supplierData->item_name = $request->item_name;
        $supplierData->quantity = $request->quantity;
        $supplierData->satuan = $request->satuan;

        $supplierData->save();
        


        return redirect()->route('supplier');
        // return $supplierData;

        // return redirect()->route('inspector');

    
    }

   

}
