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
        $data->id_quo = 1;
        $data->save();

        $data = new Quotation();
        $data->id_quo = 2;
        $data->save();
	}
}
