<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Transaksi
Route::get('/transaksi', 'TransaksiController@lihat');
Route::get('/transaksi/detail/{id}', 'TransaksiController@detail');
Route::get('/transaksi/tambah', 'TransaksiController@tambah');
Route::get('/transaksi/deliveryorder/{id}', 'TransaksiController@deliveryorder');
Route::get('/transaksi/paymentreceipt/{id}', 'TransaksiController@paymentreceipt');
Route::get('/transaksi/proofofitemreceipt/{id}', 'TransaksiController@proofofitemreceipt');
//Quotation
Route::get('/quotation', 'QuotationController@lihat');
Route::get('/quotation/cetak', 'QuotationController@cetak');
Route::get('/quotation/tambah', 'QuotationController@tambah');
Route::get('/quotation/detail/{id}', 'QuotationController@detail');
Route::post('/quotation/tambahproduk', 'QuotationController@tambahproduk');
Route::post('/quotation/cancelproduk', 'QuotationController@cancalproduk');
Route::post('/quotation/submitproduk', 'QuotationController@submitproduk');
//Kelola Barang
Route::get('/kelolabarang', 'KelolaController@lihat');
Route::get('/kelolabarang/tambah', 'KelolaController@tambah');
Route::get('/kelolabarang/test', 'KelolaController@test');
Route::get('/kelolabarang/edit/{id}', 'KelolaController@edit');
Route::get('/kelolabarang/delete/{id}', 'KelolaController@delete');
Route::post('/kelolabarang/submitedit/{id}', 'KelolaController@submitedit');
Route::post('/kelolabarang/submittambah', 'KelolaController@submittambah');
//Laporan Keuangan
Route::get('/laporankeuangan', 'LaporanController@laporan');

