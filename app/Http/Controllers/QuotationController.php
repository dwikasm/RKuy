<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;

class QuotationController extends Controller
{
    public function lihat()
    {
        $quotations = Quotation::all();
        return view('/quotation/lihatquotation', compact('quotations'));
        //return view('/quotation/lihatquotation');
    }
    public function cetak()
    {
        return view('/quotation/cetakquotation');
    }
    public function tambah()
    {
        return view('/quotation/tambahquotation');
    }

    public function detail($id)
    {
        $results = DB::select("SELECT* 
                FROM produk
                INNER JOIN data_quotation_produk ON data_quotation_produk.id_pro = produk.id_pro 
                WHERE data_quotation_produk.id_quo = ".$id);
        //dd($results);
        return view('/quotation/detailquotation', compact('results'));
    }
}
