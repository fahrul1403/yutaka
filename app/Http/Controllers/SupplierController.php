<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\User;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Supplier $supplier)
    {
        $suppliers = $supplier->all();

        return view('pages.inspector', [
            'suppliers' => $suppliers,
        ]

        
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Supplier $supplier, Request $request)
    {
        $alldata = $request->all();
        
        $alldata['delivery_date'] = $supplier->delivery_date;
        $alldata['itemName'] = $supplier->item_name;
        $alldata['delivery_date'] = $supplier->delivery_date;
        $alldata['delivery_date'] = $supplier->delivery_date;
        $alldata['delivery_date'] = $supplier->delivery_date;
        $alldata['delivery_date'] = $supplier->delivery_date;
        $alldata['delivery_date'] = $supplier->delivery_date;
        
        // return $alldata;
        // $supplier->create($alldata);
        // return view('pages.tables');
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