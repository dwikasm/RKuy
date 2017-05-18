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
Route::get('/transaksi', function () {
    return view('/transaksi/lihattransaksi');
});
Route::get('/quotation', function () {
    return view('/quotation/lihatquotation');
});
Route::get('/kelolabarang', function () {
    return view('/kelolabarang/lihatkelola');
});
Route::get('/laporankeuangan', function () {
    return view('laporankeuangan');
});
Route::get('/transaksi/tambah', function () {
    return view('/transaksi/tambahtransaksi');
});
Route::get('/transaksi/detail', function () {
    return view('/transaksi/detailtransaksi');
});
Route::get('/quotation/tambah', function () {
    return view('/quotation/tambahquotation');
});
Route::get('/quotation/cetak', function () {
    return view('/quotation/cetakquotation');
});
Route::get('/kelolabarang/tambah', function () {
    return view('/kelolabarang/tambahkelola');
});
Route::get('/kelolabarang/test', function () {
    return view('/kelolabarang/test');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
