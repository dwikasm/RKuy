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
        $data->id_pro = 5;
        $data->jumlah = 10;
        $data->subtotal = 160000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 3;
        $data->id_pro = 6;
        $data->jumlah = 10;
        $data->subtotal = 3000000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 3;
        $data->id_pro = 7;
        $data->jumlah = 10;
        $data->subtotal = 40000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 3;
        $data->id_pro = 8;
        $data->jumlah = 10;
        $data->subtotal = 160000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 3;
        $data->id_pro = 9;
        $data->jumlah = 10;
        $data->subtotal = 7750000 ;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 3;
        $data->id_pro = 10;
        $data->jumlah = 10;
        $data->subtotal = 13000000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 3;
        $data->id_pro = 11;
        $data->jumlah = 10;
        $data->subtotal = 3200000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 3;
        $data->id_pro = 12;
        $data->jumlah = 10;
        $data->subtotal =120000 ;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 3;
        $data->id_pro = 13;
        $data->jumlah = 10;
        $data->subtotal = 150000 ;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 3;
        $data->id_pro = 14;
        $data->jumlah = 10;
        $data->subtotal = 600000;
        $data->save();

        //RS Husada Surabaya
        $data = new DataQuotationProduk();
        $data->id_quo = 4;
        $data->id_pro = 15;
        $data->jumlah = 5;
        $data->subtotal = 266750 ;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 4;
        $data->id_pro = 16;
        $data->jumlah = 5;
        $data->subtotal = 522500;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 4;
        $data->id_pro = 17;
        $data->jumlah = 5;
        $data->subtotal = 376750 ;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 4;
        $data->id_pro = 18;
        $data->jumlah = 5;
        $data->subtotal = 6792500;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 4;
        $data->id_pro = 19;
        $data->jumlah = 5;
        $data->subtotal = 376750;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 4;
        $data->id_pro = 20;
        $data->jumlah = 5;
        $data->subtotal = 143000;
        $data->save();

        //RS Haji Surabaya
        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 21;
        $data->jumlah = 2;
        $data->subtotal = 583000 ;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 22;
        $data->jumlah = 5;
        $data->subtotal = 14575000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 23;
        $data->jumlah = 5;
        $data->subtotal = 1312500;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 24;
        $data->jumlah = 2;
        $data->subtotal = 3674000;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 25;
        $data->jumlah = 5;
        $data->subtotal = 101750;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 26;
        $data->jumlah = 10;
        $data->subtotal = 830500;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 27;
        $data->jumlah = 5;
        $data->subtotal = 134750;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 28;
        $data->jumlah = 5;
        $data->subtotal = 79750;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 29;
        $data->jumlah = 10;
        $data->subtotal = 137500;
        $data->save();

        $data = new DataQuotationProduk();
        $data->id_quo = 5;
        $data->id_pro = 30;
        $data->jumlah = 5;
        $data->subtotal = 825000;
        $data->save();
    }
}
