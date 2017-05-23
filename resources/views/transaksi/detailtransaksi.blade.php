@extends('adminlte::page')
@section('title', 'SI Maju Jaya')
@section('content_header')@stop
@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4><i class="fa fa-eye"></i> Detail Transaksi</h4>
      </div>
      <div class="panel-body">

        <div class=row>
          <div class="col-md-2">
            @foreach($results as $key => $value)
              @if($loop->first)
                <a href="{{Url('/transaksi/deliveryorder/'.$value->id_quo)}}" class="btn btn-primary btn-sm">
                <i class="fa fa-plus-circle"></i> Buat Delivery Order</a>
              @else
                @break
              @endif
            @endforeach
          </div>
          <div class="col-md-2">
            <a href="{{Url('/transaksi/paymentreceipt')}}" class="btn btn-primary btn-sm">
             <i class="fa fa-plus-circle"></i> Buat Payment Receipt</a>
          </div>
          <div class="col-md-2">
            <a href="{{Url('/transaksi/proofoir')}}" class="btn btn-primary btn-sm">
             <i class="fa fa-plus-circle"></i> Buat Proof of Item Receipt</a>
          </div>
        </div>
        <br></br>
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
              </table>
            </div>
          </div>
        <!-- /.row -->
      </div>
    </div>  
  </div>
@stop
