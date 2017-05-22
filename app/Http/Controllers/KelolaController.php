<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produk;

class KelolaController extends Controller
{
	public function lihat()
	{
		//return view('/kelolabarang/lihatkelola');
		$produks = Produk::all();
		return view('/kelolabarang/lihatkelola', compact('produks'));
	}
	public function tambah()
	{
		return view('/kelolabarang/tambahkelola');
	}

	public function submitTambah(Request $request)
	{
		$produk = new Produk();
		$produk->nama_pro = $request->input('nama_pro');
		$produk->harga = $request->input('harga');
		$produk->stok = $request->input('stok');
		$produk->save();

		$produks = Produk::all();
		return view('/kelolabarang/lihatkelola', compact('produks'));
	}

	public function test()
	{
		return view('/kelolabarang/test');
	}

	public function edit($id)
	{
		$produk = DB::select('select * from produk where id_pro='.$id);
		return view('/kelolabarang/edit', ['produk' => $produk[0]]);
	}

	public function delete($id)
	{
		DB::delete('delete from produk where id_pro='.$id);
		$produks = Produk::all();
		return view('/kelolabarang/lihatkelola', compact('produks'));
	}

	public function submitedit(Request $data, $id) {
		DB::table('produk')->where('id_pro', $id)->update([
			'nama_pro' => $data->input('nama_pro'),
			'harga' => $data->input('harga'),
			'stok' => $data->input('stok')
		]);

		$produks = Produk::all();
		return view('/kelolabarang/lihatkelola', compact('produks'));
	}
}
