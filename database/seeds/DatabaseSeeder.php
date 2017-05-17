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
        // $this->call(UsersTableSeeder::class);
        $this->call(ProdukTableSeeder::class);
        // $this->call(DataTransaksiTableSeeder::class);
		// $this->call(DataQuotationTableSeeder::class);
    }
}
