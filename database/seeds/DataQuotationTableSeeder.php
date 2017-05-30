<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Quotation;

class DataQuotationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_quotation')->delete();

        $data = new Quotation();
        $data->nama_quo = 'Peralatan Pak Rido';
        $data->total = 74000;
        $data->id_quo = 1;
        $data->save();

        $data = new Quotation();
        $data->nama_quo = 'Apotek Surabaya';
        $data->total = 550000;
        $data->id_quo = 2;
        $data->save();

        $data = new Quotation();
        $data->nama_quo = 'Medical Center Surabaya';
        $data->total = 5100000;
        $data->id_quo = 3;
        $data->save();

        $data = new Quotation();
        $data->nama_quo = 'RS Sutomo Surabaya';
        $data->total = 9240000;
        $data->id_quo = 4;
        $data->save();

        $data = new Quotation();
        $data->nama_quo = 'RS Haji Surabaya';
        $data->total = 20800000;
        $data->id_quo = 5;
        $data->save();

        $data = new Quotation();
        $data->nama_quo = 'Peralatan Pak Rahmat Darmawan';
        $data->total = 39000000;
        $data->id_quo = 6;
        $data->save();
	}
}
