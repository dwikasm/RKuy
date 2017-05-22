<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class TransaksiController extends Controller
{
    public function lihat()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.lihattransaksi', compact('transaksis'));
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
