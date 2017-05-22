<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTransaksi;
use App\Transaksi;

use App\DataQuotationProduk;

use App\Produk;
use DB;


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

        $results = DB::select("SELECT* 
                FROM produk
                INNER JOIN data_quotation_produk ON data_quotation_produk.id_pro = produk.id_pro 
                WHERE data_quotation_produk.id_quo = ".$id);
        //dd($results);
        return view('/transaksi/detailtransaksi', compact('results'));

    }
    public function tambah()
    {
        return view('/transaksi/tambahtransaksi');
    }
    public function deliveryorder()
    {
        // print($results);
        return view('/transaksi/deliveryorder');
    }
    public function paymentreceipt(){
        return view('/transaksi/paymentreceipt');
    }
    public function proofofitemreceipt(){
        return view('/transaksi/proofofitemreceipt');
    }
}
