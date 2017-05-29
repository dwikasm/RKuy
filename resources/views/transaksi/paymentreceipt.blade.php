@extends('adminlte::page')
@section('title', 'SI Maju Jaya')
@section('content_header')@stop
@section('content')
<body>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4><i class="fa fa-credit-card"></i> Payment Receipt<h4>
        </div>
        <!-- /. panel-heading -->
        <div class="panel-body">
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              Dari
              <address>
                <strong>PT Maju Jaya</strong><br>
                Jalan Sasak 2 No.14 Kebon Jeruk<br>
                Jakarta Barat, 11550<br>
                Phone: (804) 123-5432<br>
                Email: majujaya@maju.com
              </address>
            </div>
            <!-- /.info pt maju jaya -->
            <div class="col-sm-4 invoice-col">
              Kepada
              <address>
                <strong>{{$trans[0]->customer}}</strong><br>
                {{$trans[0]->alamat}}<br>
              </address>
            </div>
            <!-- /.info customer -->
            <div class="col-sm-4 invoice-col">
              <b>Payment #</b> <br>{{$trans[0]->id_tr}}<br>
              <b>Tanggal dibuat</b> <br>{{$trans[0]->created_at}}<br>
            </div>
            <!-- /.info  -->
          </div>
          <!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-md-12 table-responsive">
              <table class="table table-striped table-bordered">
                <thead>
                <tr>
                  <th width="80">Produk #</th>
                  <th>Nama Produk</th>
                  <th width="110">Harga Satuan</th>
                  <th width="80">Jumlah</th>
                  <th width="100">Subtotal</th>
                  <!-- <th class="text-center" width="50"><i class="fa fa-check"></i></th> -->
                </tr>
                </thead>
                <tbody>
                @foreach($results as $key => $value)
                  <tr>
                    <td class="text-center">{{ $value->id_pro }}</td>
                    <td>{{ $value->nama_pro }}</td>
                    <td>{{ $value->harga}}</td>
                    <td class="text-center">{{ $value->jumlah }}</td>
                    <td>{{ $value->subtotal }}</td>
                    <!-- <td></td> -->
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th>Total</th>
                    <th>{{$quo[0]->total}}</th>
                    <!-- <th></th> -->
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
          
          <!-- /.row -->
          <div class="row">
            <div class="col-md-2 col-md-offset-10 col-sm-2 col-xs-offset-9 text-center">
              <p>Tanggal {{$tanggaldibuat[0]->waktu_sekarang}}</p>
            </div>
            <div class="clearfix" style="height: 8rem"></div>
            <div class="col-md-2 col-md-offset-10 col-sm-2 col-xs-offset-9 text-center" >
              <span style="width:15rem;border-bottom:0.1em solid #000;display:inline-block;"></span><br>
              <strong>Penerima</strong>
            </div>
          </div>
          <div class="row no-print">
            <div class="col-md-12 text-right">
              <a href="javascript:window.print()"><button type="button" class="btn btn-default pull-left"/><i class="fa fa-print"></i> Cetak</button></a>
            </div>
          </div>
        </div>
        <!-- /. panel body -->
      </div>
      <!-- /.panel -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</body>
@stop