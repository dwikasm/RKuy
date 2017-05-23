@extends('adminlte::page')
@section('title', 'SI PT Maju Jaya')
@section('content_header')@stop
@section('content')
<body onload="window.print();">
  <div class="row">
    <div class="col-md-12">      
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12">
              <h2>Delivery Order</h2>
            </div>
          </div>
          <br>
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
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
              Kepada
              <address>
              @foreach($results as $key => $value)
                @if($loop->first)
                  <strong>{{$value->customer}}</strong><br>
                  {{$value->alamat}}<br>
                @else
                  @break
                @endif
              @endforeach
                <!-- <strong>Perusahaan Westra</strong><br>
                Jalan Bumi 3 No.19 Kemanggisan<br>
                Surabaya, 61120<br>
                Phone: (555) 539-1037<br>
                Email: joko@westra.com-->
              </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <!-- <b>Delivery Order #007612</b><br> -->
              <br>
              @foreach($results as $key => $value)
                @if($loop->first)
                  <b>Order ID:</b> {{$value->id_tr}}<br>
                  <b>Tanggal:</b> {{$value->created_at}}<br>
                @else
                  @break
                @endif
              @endforeach
              <!-- <b>Order ID:</b> 4F3S8J<br>
              <b>Tanggal:</b> 2/22/2014<br> -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                  <th>Jumlah</th>
                  <th>Produk</th>
                  <!-- <th>Deskripsi</th> -->
                  <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>
                <!-- <tr>
                  <td>1</td>
                  <td>Oxygen Checker</td>
                  <td>Alat untuk memeriksa kadar oksigen di udara</td>
                  <td>Rp. 1000.000,00</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>CO2 Checker</td>
                  <td>Alat untuk memeriksa kadar co2 di udara</td>
                  <td>Rp. 900.000,00</td>
                </tr> -->
                @foreach($results as $key => $value)
                  <tr>
                    <td>{{ $value->jumlah }}</td>
                    <td>{{ $value->nama_pro }}</td>
                    <td>{{ $value->subtotal }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
              
            </div>
            <!-- /.col -->
            <div class="col-xs-6">
              @foreach($tanggaldibuat as $key => $value)
                @if($loop->first)
                  <p class="lead">Tanggal {{$value->waktu_sekarang}}</p>
                @else
                  @break
                @endif
              @endforeach
              <!-- <p class="lead">Tanggal 22 April 2017</p> -->
              <div class="table-responsive">
                <table class="table">
                  <tr>
                    <th style="width:50%">Subtotal:</th>
                    <td>Rp. 1.900.000,00</td>
                  </tr>
                  <tr>
                    <th>Tax (5%)</th>
                    <td>Rp. 95.000,00</td>
                  </tr>
                  <tr>
                    <th>Total:</th>
                    <td>Rp. 1.995.000,00</td>
                  </tr>
                </table>
              </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

        </div>
        <!-- /. panel body -->
      </div>
    </div>
  
  </div>
</body>
@stop