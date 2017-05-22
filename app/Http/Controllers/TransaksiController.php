<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTransaksi;

class TransaksiController extends Controller
{
    public function lihat()
    {
        $data = DataTransaksi::all();
        dd($data);
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
    public function deliveryorder()
    {
        return view('/transaksi/deliveryorder');
    }
}
