@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')@stop
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tambah Produk</h3>
        </div>
            <form role="form" action="/kelolabarang/submittambah/" method="post">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_pro">Nama</label>
                  <input type="text" class="form-control"  name="nama_pro" id="nama_pro" placeholder="Nama produk">
                </div>
                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga produk..">
                </div>
                <div class="form-group">
                  <label for="harga">Stok</label>
                  <input type="text" class="form-control" name="stok" id="stok" placeholder="Stok produk..">
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </form>
        </div>
    </div>
  </div>
</section>
@stop

