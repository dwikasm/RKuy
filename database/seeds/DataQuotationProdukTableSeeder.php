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

        //Medical Center Surabaya
        $data = new DataQuotationProduk();
        $data->id_quo = 3;
        $data->id_pro = 8;
        $data->jumlah = 10;
        $data->subtotal = 400000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 3;
        $data->id_pro = 28;
        $data->jumlah = 10;
        $data->subtotal = 2000000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 3;
        $data->id_pro = 32;
        $data->jumlah = 10;
        $data->subtotal = 1500000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 3;
        $data->id_pro = 5;
        $data->jumlah = 10;
        $data->subtotal = 1200000;
        $data->save();

        //RS Sutomo Surabaya
        $data = new DataQuotationProduk();
        $data->id_quo = 4;
        $data->id_pro = 8;
        $data->jumlah = 10;
        $data->subtotal = 40000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 4;
        $data->id_pro = 28;
        $data->jumlah = 10;
        $data->subtotal = 200000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 4;
        $data->id_pro = 14;
        $data->jumlah = 10;
        $data->subtotal = 2000000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 4;
        $data->id_pro = 13;
        $data->jumlah = 10;
        $data->subtotal = 3000000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 4;
        $data->id_pro = 4;
        $data->jumlah = 10;
        $data->subtotal = 1000000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 4;
        $data->id_pro = 30;
        $data->jumlah = 10;
        $data->subtotal = 3000000;
        $data->save();

        //RS Haji Surabaya
        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 16;
        $data->jumlah = 5;
        $data->subtotal = 3050000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 14;
        $data->jumlah = 5;
        $data->subtotal = 1000000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 25;
        $data->jumlah = 5;
        $data->subtotal =500000 ;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 26;
        $data->jumlah = 5;
        $data->subtotal = 500000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 27;
        $data->jumlah = 5;
        $data->subtotal = 1250000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 28;
        $data->jumlah = 5;
        $data->subtotal = 100000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 29;
        $data->jumlah = 5;
        $data->subtotal = 400000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 30;
        $data->jumlah = 5;
        $data->subtotal = 1000000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 24;
        $data->jumlah = 5;
        $data->subtotal = 500000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 18;
        $data->jumlah = 5;
        $data->subtotal = 12500000;
        $data->save();

        //Peralatan Pak Rahmat Darmawan
        $data = new DataQuotationProduk();
        $data->id_quo = 6;
        $data->id_pro = 15;
        $data->jumlah = 5;
        $data->subtotal = 32500000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 6;
        $data->id_pro = 10;
        $data->jumlah = 5;
        $data->subtotal = 6500000;
        $data->save();
    }
}
