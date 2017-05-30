<?php

use Illuminate\Database\Seeder;
use App\DataQuotationProduk;

class DataQuotationProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_quotation_produk')->delete();

        //Peralatan Pak Rido
        $data = new DataQuotationProduk();
        $data->id_quo = 1;
        $data->id_pro = 1;
        $data->jumlah = 2;
        $data->subtotal = 44000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 1;
        $data->id_pro = 2;
        $data->jumlah = 3;
        $data->subtotal = 30000;
        $data->save();

        //Apotek Surabaya
        $data = new DataQuotationProduk();
        $data->id_quo = 2;
        $data->id_pro = 3;
        $data->jumlah = 5;
        $data->subtotal = 500000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 2;
        $data->id_pro = 2;
        $data->jumlah = 5;
        $data->subtotal = 50000;
        $data->save();
    }
}
