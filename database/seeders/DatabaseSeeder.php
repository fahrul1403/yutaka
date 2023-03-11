<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class, SupplierDataSeeder::class, RoleSeeder::class, Supplier::class, Inspector::class, ItemSeeder::class]);
    }
}
