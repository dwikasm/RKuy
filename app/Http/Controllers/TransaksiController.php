<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTransaksi;
use App\Transaksi;
use App\DataQuotationProduk;

class TransaksiController extends Controller
{
    public function lihat()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.lihattransaksi', compact('transaksis'));

    }
    public function detail($id)
    {
        $trans = Transaksi::findOrFail($id);
        return view('/transaksi/detailtransaksi',compact('trans'));
        // return view('/transaksi/detailtransaksi');
    }
    public function tambah()
    {
        return view('/transaksi/tambahtransaksi');
    }
    public function deliveryorder()
    {
        return view('/transaksi/deliveryorder');
    }
    public function paymentreceipt(){
        return view('/transaksi/paymentreceipt');
    }
    public function proofofitemreceipt(){
        return view('/transaksi/proofofitemreceipt');
    }
}
