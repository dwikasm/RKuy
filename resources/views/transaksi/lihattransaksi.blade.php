@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('adminite_css')
@section('content_header')@stop
@section('content')

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css
">
<div class="panel panel-default"><div class="panel-body">
<h4><i class="fa fa-home"></i> Tabel Transaksi</h4><hr>
<div class=row>
  <div class="col-md-2">
     <a href="{{Url('/transaksi/tambah')}}" class="btn btn-primary">
       <i class="fa fa-plus-circle"></i> Tambah Transaksi</a>
    </div>
</div>

 <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Transaksi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="lihat_transaksi" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Id Transaksi</th>
                    <th>Customer</th>
                    <th>Alamat</th>
                    <th>Waktu Transaksi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($transaksis as $key => $value)
                  <tr>
                    
                    <td>{{ $value->id_tr }}</td>
                    <td>{{ $value->customer }}</td>
                    <td>{{ $value->alamat }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td>
                    <a href="{{Url('/transaksi/detail')}}"
                      <button type="button" class="btn btn-default">Lihat</button></a>
                      <button type="button" class="btn btn-danger">Hapus</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

<script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js "></script>
          
<script>
  $(document).ready(function(){
    $('#lihat_transaksi').DataTable();
});
</script>

@stop

