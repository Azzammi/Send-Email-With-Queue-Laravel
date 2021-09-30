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
        // \App\Models\User::factory(10)->create();
        // $this->call(CustomersTableSeeder::class);
        // $this->call(EmployeesTableSeeder::class);
        // $this->call(OfficesTableSeeder::class);
        // $this->call(OrderdetailsTableSeeder::class);
        // $this->call(OrdersTableSeeder::class);
        // $this->call(PaymentsTableSeeder::class);
        // $this->call(ProductlinesTableSeeder::class);
        // $this->call(ProductsTableSeeder::class);
        $this->call(UserSeeder::class);
    }
}
