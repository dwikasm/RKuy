@extends('adminlte::page')
@section('title', 'SI Maju Jaya')
@section('content_header')@stop
@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4><i class="fa fa-eye"></i> Detail Transaksi</h4>
      </div>
      <div class="panel-body">
        <div class="row no-print">
          <div class="col-md-2">
            <a href="{{Url('/transaksi/deliveryorder/'.$trans[0]->id_quo)}}" class="btn btn-primary btn-sm">
              <i class="fa fa-plus-circle"></i> Buat Delivery Order</a>
          </div>
          <div class="col-md-2">
            <a href="{{Url('/transaksi/paymentreceipt/'.$trans[0]->id_quo)}}" class="btn btn-primary btn-sm">
              <i class="fa fa-plus-circle"></i> Buat Payment Receipt</a>
          </div>
          <div class="col-md-2">
            <a href="{{Url('/transaksi/proofofitemreceipt/'.$trans[0]->id_quo)}}" class="btn btn-primary btn-sm">
              <i class="fa fa-plus-circle"></i> Buat Proof of Item Receipt</a>
          </div>
        </div>
        <!-- /.tombol tombol -->
        <div class="row" style="margin-top: 1rem">
          <div class="col-md-6 col-xs-6">
            <h4>{{$trans[0]->customer}}</h4>
            <address>
              {{$trans[0]->alamat}}
            </address>
          </div>
          <div class="col-md-6 col-xs-6 text-right">
            <h4>Transaksi #{{$trans[0]->id_tr}}</h4>
            <address>
              {{$trans[0]->created_at}}
            </address>
          </div>
        </div>
        <!-- /.detail transaksi -->
        <div class=row>
          <div class="col-md-12">                                                                                      
            <div class="table-responsive">          
              <table id="table" class="table table-bordered table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
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
                <tfoot>
                  <tr>
                    <th></th>
                    <th></th>
                    <th>Total</th>
                    <th>{{ $quo[0]->total }}</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
        <!-- /.row tabel-->
        <div class="row no-print">
          <div class="col-md-12 text-right">
            <a href="javascript:window.print()"<button type="button" class="btn btn-default pull-left"/><i class="fa fa-print"></i> Cetak</button></a>
          </div>
        </div>
        <!-- /.row cetak -->
      </div>
      <!-- /.panel body -->
    </div>  
    <!-- /.panel -->
@stop
