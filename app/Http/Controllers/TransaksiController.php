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
        $query = DB::select("SELECT id_quo
            FROM data_quotation");
        return view('/transaksi/tambahtransaksi', compact('query'));
    }
    public function submit_data(Request $request)
    {
        $idquo = DB::select("SELECT id_quo
            FROM data_quotation
            where nama_quo = '".$request->input('namaquo')."'");
        //dd ($idquo);
        $transaksi = new Transaksi();
        //$transaksi->id_quo = $request->input('idquo');
        $transaksi->id_quo = $idquo[0]->id_quo;
        $transaksi->customer = $request->input('customer');
        $transaksi->alamat = $request->input('alamat');
        $transaksi->save();
        $transaksis = Transaksi::all();
        return view('transaksi.lihattransaksi', compact('transaksis'));
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
    public function paymentreceipt($id){
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
        return view('/transaksi/paymentreceipt', compact('results', 'tanggaldibuat', 'total'));
    }
    public function proofofitemreceipt($id){
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
        return view('/transaksi/proofofitemreceipt', compact('results', 'tanggaldibuat', 'total'));
    }
}
