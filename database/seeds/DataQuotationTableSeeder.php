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
	}
}
