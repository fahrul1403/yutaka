<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupplierData;
use App\Models\User;

class InspectorController extends Controller
{
    public function index(SupplierData $supplier, User $user)
    {
        $suppliers = $supplier->all();
        $users = $user->all();

        return view('pages.inspector', [
            'suppliers' => $suppliers,
            'users' => $users,
        ]

        
        );
    }

    public function store( Request $request, SupplierData $supplierData)
    {
        $data = $request->all();

        // return $request;

        if ($request->status === 'diterima') {

            SupplierData::where('id', $request->id)->update([
                'millsheet' => $request->ird,
                'jenis_inspeksi' => $request->jenis_inspeksi,
                'visual_hasil_check' => $request->visual_hasil_check,
                'dimensi' => $request->dimensi,
                'hasil_trial_line' => $request->hasil_trial_line,
                'kasus_reject' => $request->kasus_reject,
                'inspector_incoming' => $request->user_id,
                'show_status' => 'diterima',
            ]);

            // $newdata = SupplierData::findOrFail($request->id);

            // $newdata->millsheet = $request->ird;
            // $newdata->jenis_inspeksi = $request->jenis_inspeksi;
            // $newdata->visual_hasil_check = $request->visual_hasil_check;
            // $newdata->dimensi = $request->dimensi;
            // $newdata->hasil_trial_line = $request->hasil_trial_line;
            // $newdata->kasus_reject = $request->kasus_reject;
            // $newdata->inspector_incoming = $request->user_id;
            // $newdata->show_status = 'diterima';


            // $newdata->save();
           

            return redirect()->route('inspector');
            // $supplierData = new SupplierData;
            // $supplierData->user_id = $request->user_id;
            // $supplierData->millsheet = $request->ird;
            // $supplierData->jenis_inspeksi = $request->jenis_inspeksi;
            // $supplierData->visual_hasil_check = $request->visual_hasil_check;
            // $supplierData->dimensi = $request->dimensi;
            // $supplierData->hasil_trial_line = $request->hasil_trial_line;
            // $supplierData->kasus_reject = $request->kasus_reject;
            // $supplierData->inspector_incoming = $request->user_id;
            // $supplierData->show_status = 'diterima';

            // $supplierData->save();

            // update the data with id same as $request->id
           




            
        } elseif ($request->status === 'ditolak') {

            // $supplierData = new SupplierData;
            // $supplierData->user_id = $request->user_id;
            // $supplierData->millsheet = $request->ird;
            // $supplierData->jenis_inspeksi = $request->jenis_inspeksi;
            // $supplierData->visual_hasil_check = $request->visual_hasil_check;
            // $supplierData->dimensi = $request->dimensi;
            // $supplierData->hasil_trial_line = $request->hasil_trial_line;
            // $supplierData->kasus_reject = $request->kasus_reject;
            // $supplierData->inspector_incoming = $request->user_id;
            // $supplierData->show_status = 'ditolak';

            // $supplierData->save();

//  // update the data with id same as $request->id
            SupplierData::where('id', $request->id)->update([
                'millsheet' => $request->ird,
                'jenis_inspeksi' => $request->jenis_inspeksi,
                'visual_hasil_check' => $request->visual_hasil_check,
                'dimensi' => $request->dimensi,
                'hasil_trial_line' => $request->hasil_trial_line,
                'kasus_reject' => $request->kasus_reject,
                'inspector_incoming' => $request->user_id,
                'show_status' => 'ditolak',
            ]);

                return redirect()->route('inspector');
        }
        // return redirect()->route('inspector');
    }

    public function terima( Request $request, SupplierData $supplierData)
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
    }

    public function tolak( Request $request, SupplierData $supplierData)
    {
        $data = $request->all();
        // return $data;

        $supplierData = new SupplierData;
        $supplierData->id = $request->id;
        $supplierData->millsheet = $request->ird;
        $supplierData->jenis_inspeksi = $request->jenis_inspeksi;
        $supplierData->visual_hasil_check = $request->visual_hasil_check;
        $supplierData->dimensi = $request->dimensi;
        $supplierData->hasil_trial_line = $request->hasil_trial_line;
        $supplierData->kasus_reject = $request->kasus_reject;
        $supplierData->inspector_incoming = $request->user_id;
        $supplierData->show_status = 'ditolak';

        $supplierData->save();
    }

}

