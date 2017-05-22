@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('adminite_css')
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
                  <tr>
                    <td>Kursi Roda</td>
                    <td>5</td>
                    <td>Rp6.000.000</td>
                    <td>Rp.30.000.000</td>
                  </tr>
                  <tr>
                    <td>Stetoscope</td>
                    <td>50</td>
                    <td>Rp1.000.000</td>
                    <td>Rp.50.000.000</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>Total :</td>
                    <td>Rp.80.000.000</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
<script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js "></script>
          
<script>
  $(document).ready(function(){
    $('#myTable').DataTable();
});
</script>

@stop

