<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
