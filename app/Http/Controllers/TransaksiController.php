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
    public function deliveryorder($id)
    {
        $results = DB::select("SELECT*
            FROM data_quotation_produk
            INNER JOIN produk ON produk.id_pro = data_quotation_produk.id_pro
            INNER JOIN data_quotation ON data_quotation.id_quo = data_quotation_produk.id_quo
            INNER JOIN data_transaksi ON data_transaksi.id_quo = data_quotation_produk.id_quo
            WHERE data_quotation_produk.id_quo = ".$id);
        $tanggaldibuat = DB::select("SELECT CURDATE() as waktu_sekarang");
        $total = DB::select("SELECT SUM(subtotal) AS total
            FROM
            (SELECT subtotal
            FROM data_quotation_produk
            INNER JOIN produk ON produk.id_pro = data_quotation_produk.id_pro
            INNER JOIN data_quotation ON data_quotation.id_quo = data_quotation_produk.id_quo
            INNER JOIN data_transaksi ON data_transaksi.id_quo = data_quotation_produk.id_quo
            WHERE data_quotation_produk.id_quo = ".$id.") AS gabungan");
        //dd($results);
        //dd($tanggaldibuat);
        //dd($total);
        return view('/transaksi/deliveryorder', compact('results', 'tanggaldibuat', 'total'));
    }
    public function paymentreceipt(){
        return view('/transaksi/paymentreceipt');
    }
    public function proofofitemreceipt(){
        return view('/transaksi/proofofitemreceipt');
    }
}
