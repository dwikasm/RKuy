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
        DB::table('data_transaksi')->delete();
    }
}
