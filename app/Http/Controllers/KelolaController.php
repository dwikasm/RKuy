<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produk;

class KelolaController extends Controller
{
    public function lihat()
    {
    	//return view('/kelolabarang/lihatkelola');
        $produks = Produk::all();
        return view('/kelolabarang/lihatkelola', compact('produks'));
    }
    public function tambah(Request $request)
    {
        $mk = new matkul();
        $mk->nama = $request->nama;
        $mk->sks = $request->sks;
        $mk->semester = $request->semester;
        $mk->jurusan = "Teknik Informatika";
        $mk->save();
        return redirect()->route('matkul.index')->with('alert-success','Data Berhasi Disimpan');
    	return view('/kelolabarang/tambahkelola');
    }
    public function test()
    {
    	return view('/kelolabarang/test');
    }
}
