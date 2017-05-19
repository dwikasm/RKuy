<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function lihat()
    {
    	return view('/transaksi/lihattransaksi');
    }
    public function detail()
    {
    	return view('/transaksi/detailtransaksi');
    }
    public function tambah()
    {
    	return view('/transaksi/tambahtransaksi');
    }
}
