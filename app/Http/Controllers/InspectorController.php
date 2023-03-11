<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupplierData;

class InspectorController extends Controller
{
    public function index(SupplierData $supplier)
    {
        $suppliers = $supplier->all();

        return view('pages.inspector', [
            'suppliers' => $suppliers,
        ]

        
        );
    }
}