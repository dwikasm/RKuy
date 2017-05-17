<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DataTransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_transaksi')->insert([
            'waktu_transaksi' => ,
            'customer' => 'James Howlett',
            'total_harga_t' => 2000000,
            'keuntungan' => 200000,
        ]);
    }
}
