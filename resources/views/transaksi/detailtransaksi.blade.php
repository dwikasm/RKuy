@extends('adminlte::page')
@section('title', 'SI Maju Jaya')
@section('content_header')@stop
@section('content')

<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css
">
<div class=row>
    
    <div class="col-md-2">
      <a href="{{Url('/transaksi/deliveryorder')}}" class="btn btn-default">
       <i class="fa fa-plus-circle"></i> Buat Delivery Order</a>
    </div>
    <div class="col-md-2">
      <a href="{{Url('/transaksi/paymentreceipt')}}" class="btn btn-default">
       <i class="fa fa-plus-circle"></i> Buat Payment Receipt</a>
    </div>
    <div class="col-md-2">
      <a href="{{Url('/transaksi/proofoir')}}" class="btn btn-default">
       <i class="fa fa-plus-circle"></i> Buat Proof of Item Receipt</a>
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
              <table id="myTable" class="table table-bordered table-hover">
                <thead>
                  @foreach($tra)
                  <tr>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Total Harga</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($results as $key => $value)
                  <tr>
                  <td>{{ $value->nama_pro }}</td>
                  <td>{{ $value->jumlah }}</td>
                  <td>{{ $value->harga }}</td>
                  <td>{{ $value->subtotal }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
<script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js "></script>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4><i class="fa fa-eye"></i> Detail Transaksi</h4>
      </div>
      <div class="panel-body">
        <div class="row">
          
        </div>
        <!-- /.row -->
      </div>
    </div>  
@stop
@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@stop
@section('js')
    <script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js "></script>
    <script>
      $(document).ready(function(){
        $('#myTable').DataTable();
    });
    </script>
@stop