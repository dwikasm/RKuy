<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Transaksi;

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

        $data = new Transaksi();
        $data->id_quo = 1;
        $data->customer = "Kukuh";
        $data->alamat = "Jalan Gebang Kidul 40B";
        $data->save();
    }
}
