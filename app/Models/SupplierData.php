<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupplierData extends Model
{
    use HasFactory;

    protected $table = 'supplier_data';

    protected $fillable = [
        'delivery_date',
        'item_number',
        'item_name',
        'quantity',
        'Satuan',
        'millsheet',
        'jenis_inspeksi',
        'visual_hasil_check',
        'dimensi',
        'hasil_trial_line',
        'kasus_reject',
        'inspector_incoming',
        'jr_analisis',
        'show_status',
        'created_at',
        'updated_at',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    // items
    public function Item()
    {
        return $this->belongsTo(Item::class);
    }


}
