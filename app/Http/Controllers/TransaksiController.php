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
