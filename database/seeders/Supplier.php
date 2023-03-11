<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Supplier extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = [
            [
                'name' => 'Angga Wibowo',
                'user_id' => '3',
                'email' => 'angga@yutaka.co.id',
                'phone' => '087654321098',
                'address' => 'Jawa Barat',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Andi Wibawa',
                'user_id' => '4',
                'email' => 'andi@yutaka.co.id',
                'phone' => '087654321234',
                'address' => 'Jawa Barat',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($suppliers as $supplier) {
            DB::table('suppliers')->insert($supplier);
        }
    }
}
