<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function lihat()
    {
    	return view('/quotation/lihatquotation');
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
