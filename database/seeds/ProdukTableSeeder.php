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
        DB::table('produk')->delete();
        
        DB::table('produk')->insert([
            'id_pro' => 1,
            'nama_pro' => 'Oxygen Checker',
            'stok' => 112,
            'harga' => 22000
        ]);
        DB::table('produk')->insert([
            'id_pro' => 2,
            'nama_pro' => 'CO2 Checker',
            'stok' => 80,
            'harga' => 10000
        ]);
        DB::table('produk')->insert([
            'id_pro' => 3,
            'nama_pro' => 'CO2 Mask',
            'stok' => 962,
            'harga' => 100000
        ]);
        DB::table('produk')->insert([
            'id_pro' => 4,
            'nama_pro' => 'Oxygen Mask',
            'stok' => 1002,
            'harga' => 100000
        ]);

    }
}
