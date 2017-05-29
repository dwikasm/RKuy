<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTransaksi;
use App\Transaksi;
use App\DataQuotationProduk;
use App\Produk;
use App\Quotation;
use DB;


class TransaksiController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lihat()
    {
        $transaksis = Transaksi::all();
        return view('transaksi.lihattransaksi', compact('transaksis'));

    }
    public function detail($id)
    {
        $trans = DB::select("   SELECT *
                                FROM data_transaksi
                                WHERE data_transaksi.id_tr = ".$id);
        $quo = DB::select("SELECT* FROM data_quotation WHERE data_quotation.id_quo = ".$trans[0]->id_quo);
        $results = DB::select("SELECT* 
                FROM produk
                INNER JOIN data_quotation_produk ON data_quotation_produk.id_pro = produk.id_pro 
                WHERE data_quotation_produk.id_quo = ".$trans[0]->id_quo);
        // dd($trans);
        // dd($results);
        // dd($quo);
        return view('/transaksi/detailtransaksi', compact('trans','results', 'quo'));

    }
    public function tambah()
    {
        $quotations = Quotation::all();
        return view('/transaksi/tambahtransaksi', compact('quotations'));
    }
    public function submit_data(Request $request)
    {
        // dd($request);

        $transaksi = new Transaksi();
        $transaksi->id_quo = $request->input('idquo');
        $transaksi->customer = $request->input('customer');
        $transaksi->alamat = $request->input('alamat');
        echo ($transaksi->id_tr);
        $transaksi->save();
        //dd($transaksi);
        
        $trans = DB::select("   SELECT *
                                FROM data_transaksi
                                WHERE data_transaksi.id_tr = ".$transaksi->id);
        $quo = DB::select("SELECT* FROM data_quotation WHERE data_quotation.id_quo = ".$transaksi->id_quo);
        $results = DB::select("SELECT* 
                FROM produk
                INNER JOIN data_quotation_produk ON data_quotation_produk.id_pro = produk.id_pro 
                WHERE data_quotation_produk.id_quo = ".$transaksi->id_quo);
        // dd($trans);
        // dd($results);
        // dd($quo);
        return view('/transaksi/detailtransaksi', compact('trans','results', 'quo'));
    }
    public function deliveryorder($id)
    {
        $trans = DB::select("   SELECT *
                                FROM data_transaksi
                                WHERE data_transaksi.id_tr = ".$id);
        $quo = DB::select("SELECT* FROM data_quotation WHERE data_quotation.id_quo = ".$trans[0]->id_quo);
        $results = DB::select("SELECT* 
                FROM produk
                INNER JOIN data_quotation_produk ON data_quotation_produk.id_pro = produk.id_pro 
                WHERE data_quotation_produk.id_quo = ".$trans[0]->id_quo);
        $tanggaldibuat = DB::select("SELECT CURDATE() as waktu_sekarang");
        // dd($trans);
        // dd($results);
        return view('/transaksi/deliveryorder', compact('trans','results', 'quo', 'tanggaldibuat'));
    }
    public function paymentreceipt($id){
        $trans = DB::select("   SELECT *
                                FROM data_transaksi
                                WHERE data_transaksi.id_tr = ".$id);
        $quo = DB::select("SELECT* FROM data_quotation WHERE data_quotation.id_quo = ".$trans[0]->id_quo);
        $results = DB::select("SELECT* 
                FROM produk
                INNER JOIN data_quotation_produk ON data_quotation_produk.id_pro = produk.id_pro 
                WHERE data_quotation_produk.id_quo = ".$trans[0]->id_quo);
        $tanggaldibuat = DB::select("SELECT CURDATE() as waktu_sekarang");
        // dd($trans);
        // dd($results);
        return view('/transaksi/paymentreceipt', compact('trans','results', 'quo', 'tanggaldibuat'));
    }
    public function proofofitemreceipt($id){
        $trans = DB::select("   SELECT *
                                FROM data_transaksi
                                WHERE data_transaksi.id_tr = ".$id);
        $quo = DB::select("SELECT* FROM data_quotation WHERE data_quotation.id_quo = ".$trans[0]->id_quo);
        $results = DB::select("SELECT* 
                FROM produk
                INNER JOIN data_quotation_produk ON data_quotation_produk.id_pro = produk.id_pro 
                WHERE data_quotation_produk.id_quo = ".$trans[0]->id_quo);
        $tanggaldibuat = DB::select("SELECT CURDATE() as waktu_sekarang");
        // dd($trans);
        // dd($results);
        return view('/transaksi/proofofitemreceipt', compact('trans','results', 'quo', 'tanggaldibuat'));
    }
}
