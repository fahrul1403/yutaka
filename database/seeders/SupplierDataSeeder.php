<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SupplierDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplier_data')->insert([
        'delivery_date' => now(),
        'user_id' => '1',
        'item_number' => 'GN1',
        'item_name' =>  'COMP X 1',
        'quantity' => '100',
        'Satuan' => 'pcs',
        'millsheet' => 'OK',
        'jenis_inspeksi' => 'Longgar',
        'visual_hasil_check' => 'OK',
        'dimensi' => '4,5',
        'hasil_trial_line' => 'OK', 
        'kasus_reject' => 'N/A',
        'inspector_incoming' => 'Ahmad', 
        'jr_analisis' => 'N/A',
        'show_status' => 'OK',
        'created_at' => now(),
        'updated_at' => now(),
        ]);
    }
}
