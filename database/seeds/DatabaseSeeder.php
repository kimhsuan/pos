<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CustomersTableSeeder::class);
        $this->call(CustsortsTableSeeder::class);
        $this->call(ProdsortsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(TransitsTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(UsersTableSeeder::class);

    }
}
