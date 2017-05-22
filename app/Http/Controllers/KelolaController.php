<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class KelolaController extends Controller
{
    public function lihat()
    {
    	return view('/kelolabarang/lihatkelola');
    }
    public function tambahPage(){
        return view('/kelolabarang/tambahkelola');
    }
    public function tambah(Request $request)
    {
        $Prod = new Produk();
        $Prod->nama_pro = $request->nama_pro;
        $Prod->harga = $request->harga;
        $Prod->stok = $request->stok;
        $Prod->save();
        return redirect()->route('/kelolabarang/lihatkelola')->with('alert-success','Data Berhasil Disimpan');
    	
    }
    public function test()
    {
    	return view('/kelolabarang/test');
    }
}
