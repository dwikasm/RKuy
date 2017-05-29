<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Quotation;
use App\Produk;
use App\DataQuotationProduk;

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
        $produks = Produk::all();
        return view('/quotation/tambahquotation', ['order'=>array(),'produks' => $produks, 'total' => 0]);
    }

    public function detail($id)
    {
        $results = DB::select("SELECT* 
                FROM produk
                INNER JOIN data_quotation_produk ON data_quotation_produk.id_pro = produk.id_pro 
                WHERE data_quotation_produk.id_quo = ".$id);
        $quo = DB::select("SELECT * 
                            FROM data_quotation
                            WHERE data_quotation.id_quo = ".$id);
        // dd($results);
        // dd($quo);
        return view('/quotation/detailquotation', compact('results','quo'));
    }

    public function tambahproduk(Request $request)
    {
        $arrayProduk = [];
        $total = 0;

        if ($request->session()->has('produks'))
        {
            foreach ($request->session()->get('produks') as $produk)
            {
                array_push($arrayProduk, $produk);
                $total += $produk->subtotal;
            }
        }

        $idProduk = $request->input('produk');
        $produk = Produk::where('id_pro', $idProduk)->first();
        $subtotal = $produk->harga * $request->input('jumlah');
        $total += $subtotal;
        $produk2 = (object) [
            'id_pro' => $produk->id_pro,
            'nama_pro' => $produk->nama_pro,
            'jumlah' => $request->input('jumlah'),
            'harga' => $produk->harga,
            'subtotal' => $subtotal
        ];
        array_push($arrayProduk, $produk2);
        $request->session()->put('produks', $arrayProduk);
        $request->session()->put('total', $total);
        $produks = Produk::all();
        return view('/quotation/tambahquotation', ['order'=>$arrayProduk, 'produks'=>$produks, 'total' => $total]);
    }

    public function cancelproduk(Request $request)
    {
        $request->session()->put('produks', []);
        return redirect('/quotation');
    }

    public function submitproduk(Request $request)
    {
        if ($request->session()->has('produks'))
        {
            $total = 0;
            foreach ($request->session()->get('produks') as $produk)
            {
                $total += $produk->subtotal;
            }
            $produks = $request->session()->get('produks');
            $request->session()->put('produks', []);
            #$request->session()->put('total', 0);
            if (count($produks) > 0)
            {
                $quotation = new Quotation();
                $quotation->total = $total;
                $quotation->nama_quo = $request->input('namaquotation');
                $quotation->save();

                foreach ($produks as $produk)
                {
                    $data = new DataQuotationProduk();
                    $data->id_quo = $quotation->id;
                    $data->id_pro = $produk->id_pro;
                    $data->jumlah = $produk->jumlah;
                    $data->subtotal = $produk->subtotal;
                    $data->save();
                }
            }
        }
        return redirect('/quotation');
    }
}
