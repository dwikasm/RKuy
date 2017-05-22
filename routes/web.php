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
Route::get('/transaksi/deliveryorder', 'TransaksiController@deliveryorder');
Route::get('/transaksi/paymentreceipt', 'TransaksiController@paymentreceipt');
Route::get('/transaksi/proofofitemreceipt', 'TransaksiController@proofofitemreceipt');
//Quotation
Route::get('/quotation', 'QuotationController@lihat');
Route::get('/quotation/cetak', 'QuotationController@cetak');
Route::get('/quotation/tambah', 'QuotationController@tambah');
//Kelola Barang
Route::get('/kelolabarang', 'KelolaController@lihat');
Route::get('/kelolabarang/tambah', 'KelolaController@tambahPage');
Route::post('/kelolabarang/tambahmethod', 'KelolaController@tambah');
//Laporan Keuangan
Route::get('/laporankeuangan', 'LaporanController@laporan');

