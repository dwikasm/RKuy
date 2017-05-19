<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelolaController extends Controller
{
    public function lihat()
    {
    	return view('/kelolabarang/lihatkelola');
    }
    public function tambah()
    {
    	return view('/kelolabarang/tambahkelola');
    }
    public function test()
    {
    	return view('/kelolabarang/test');
    }
}
