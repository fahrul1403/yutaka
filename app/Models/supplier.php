<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

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
}
