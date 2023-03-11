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

    public function create( Request $request)
    {
        $data = $request->all();
        
        return $data;

        $supplier = new SupplierData;
        $supplier->delivery_date = $request->delivery_date;
        $supplier->item_number = $request->item_number;
        $supplier->item_name = $request->item_name;
        $supplier->quantity = $request->quantity;
        $supplier->Satuan = $request->Satuan;
        $supplier->millsheet = $request->millsheet;
        $supplier->jenis_inspeksi = $request->jenis_inspeksi;
        $supplier->visual_hasil_check = $request->visual_hasil_check;
        $supplier->dimensi = $request->dimensi;
        $supplier->hasil_trial_line = $request->hasil_trial_line;
        $supplier->kasus_reject = $request->kasus_reject;
        $supplier->inspector_incoming = $request->inspector_incoming;
        $supplier->jr_analisis = $request->jr_analisis;
        $supplier->show_status = $request->show_status;
        $supplier->save();

        // return redirect()->route('inspector');

    
    }
}
