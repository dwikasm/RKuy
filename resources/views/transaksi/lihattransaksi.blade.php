@extends('adminlte::page')
<<<<<<< HEAD
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

=======
@section('title', 'SI Maju Jaya')
@section('content_header')@stop
@section('content')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css
">
<div class="panel panel-default">
  <div class="panel-body">
    <h4><i class="fa fa-home"></i> Tabel Transaksi</h4>
    <div class=row>
      <div class="col-md-12 text-left" style="margin-bottom: 1.5rem">
        <a href="{{Url('/transaksi/tambah')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah Transaksi</a>
      </div>
      <!-- /.col-md-12 -->
      <div class="col-md-12">                                                                                      
        <div class="table-responsive">          
          <table id="myTable" class="table table-bordered table-condensed table-hover">
            <thead>
              <tr>
                <th>Tanggal Dibuat</th>
                <th>ID Transaksi</th>
                <th>ID Quotation</th>
                <th>Customer</th>
                <th>Alamat</th>
                <th>Detail</th>
              </tr>
            </thead>
            <tbody>
            @foreach($transaksis as $key => $value)
              <tr>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->id_tr }}</td>
                <td>{{ $value->id_quo }}</td>
                <td>{{ $value->customer }}</td>
                <td>{{ $value->alamat }}</td>
                <td><a href="{{Url('/transaksi/detail')}}"<button type="button" class="btn btn-default btn-sm"/><i class="fa fa-eye"></i> Lihat</button></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- /.row -->
  </div>
</div>

>>>>>>> cdd38d306d3b5c3be2ee81553b685e264d3ac73b
<script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js "></script>
          
<script>
  $(document).ready(function(){
<<<<<<< HEAD
    $('#lihat_transaksi').DataTable();
});
</script>

@stop

=======
    $('#myTable').DataTable();
});
</script>
@stop
>>>>>>> cdd38d306d3b5c3be2ee81553b685e264d3ac73b
