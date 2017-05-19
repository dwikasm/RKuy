<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            [
            'nama_produk' => 'Oxygen Checker',
            'jumlah' => 112,
            'harga_jual' => 1000000,
            'harga_beli' => 900000,
            ],
            [
            'nama_produk' => 'CO2 Checker',
            'jumlah' => 80,
            'harga_jual' => 1000000,
            'harga_beli' => 900000,
            ],
            [
            'nama_produk' => 'CO2 Mask',
            'jumlah' => 962,
            'harga_jual' => 100000,
            'harga_beli' => 90000,
            ],
            [
            'nama_produk' => 'Oxygen Mask',
            'jumlah' => 1002,
            'harga_jual' => 100000,
            'harga_beli' => 90000,
            ],
        ]);

    }
}
