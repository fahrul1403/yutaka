<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin',
                'role_id' => '1',
                'email' => 'admin@yutaka.co.id',
                'address' => 'Jawa Barat',
                'phone' => '087654321654',
                'email_verified_at' => now(),
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Inspector',
                'role_id' => '2',
                'email' => 'inspector@yutaka.co.id',
                'address' => 'Jawa Barat',
                'phone' => '087654321543',
                'email_verified_at' => now(),
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'PT ABC Biru',
                'role_id' => '3',
                'email' => 'supplier@yutaka.co.id',
                'address' => 'Jawa Barat',
                'phone' => '087654321231',
                'email_verified_at' => now(),
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'PT Teknologi Nusantara',
                'role_id' => '3',
                'email' => 'supplier@yutaka.co.id',
                'address' => 'Jawa Barat',
                'phone' => '087654321098',
                'email_verified_at' => now(),
                'password' => Hash::make('123'),
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert($user);
        }
      
    }
}
