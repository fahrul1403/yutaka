<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Inspector extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inspectors = [
            [
                'name' => 'Inspector Umum',
                'user_id' => '2',
                'email' => 'inspect@yutaka.co.id',
                'phone' => '08765438976543',
                'address' => 'Jawa Barat',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($inspectors as $inspector) {
            DB::table('inspectors')->insert($inspector);
        }
    }
}
