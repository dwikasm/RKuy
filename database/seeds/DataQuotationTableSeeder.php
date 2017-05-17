<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DataQuotationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_quotation')->insert([
            'waktu_quotation' => '2017-05-18 08:00:00',
            'customer' => 'James Howlett',
            'total_harga_q' => 2000000,
        ]);
	}
}
