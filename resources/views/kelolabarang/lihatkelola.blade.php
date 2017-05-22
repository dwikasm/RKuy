@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('adminite_css')
@section('content_header')<h1>Dashboard</h1>@stop
@section('content')

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css
">

<div class=row>
    <div class="col-md-2">
      <a href="{{Url('/kelolabarang/tambah')}}" class="btn btn-default">
       <i class="fa fa-plus-circle"></i>Tambah Produk</a>
    </div>
</div>

<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tabel Transaksi</h3>
        </div>
        <div class="box-body">
    			<table id="lihatKelolaTable" class="table table-bordered table-hover">
      			<thead>
        				<tr>
  				        <th>Id Produk</th>
  				        <th>Nama Produk</th>
  				        <th>Harga</th>
                  <th>Stok Barang</th>
                  <th>Opsi</th>
        				</tr>
      			</thead>
      			<tbody>
        			@foreach($produks as $key => $value)
              <tr>
                <td>{{ $value->id_pro }}</td>
                <td>{{ $value->nama_pro }}</td>
                <td>{{ $value->harga }}</td>
                <td>{{ $value->stok }}</td>
                <td>
                  <a href="{{Url('/kelolabarang/edit/'.$value->id_pro)}}">
                    <button type="button" class="btn btn-default">Edit</button>
                  </a>
                  <a href="{{Url('/kelolabarang/delete/'.$value->id_pro)}}">
                    <button type="button" class="btn btn-danger">Hapus</button>
                  </a>
                </td>
              </tr>
              @endforeach
      			</tbody>
   			 </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
</section>
<script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js "></script>
<script>
  $(document).ready(function(){
    $('#lihatKelolaTable').DataTable();
});
</script>

@stop