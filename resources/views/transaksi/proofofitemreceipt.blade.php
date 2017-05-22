@extends('adminlte::page')
@section('title', 'SI PT Maju Jaya')
@section('content_header')<h1>Buat Proof of Item Receipt</h1>@stop
@section('content')
<body onload="window.print();">
  <div class="row">
    <div class="col-md-12">      
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12">
              <h2>Proof of Item Receipt</h2>
               <address>
                <strong>PT Maju Jaya</strong>
                <strong>| Transaksi #tf0001</strong>
              </address>
              <div class="row">
              	  <div class="col-md-4">
              	  	<h4>Tanggal Transaksi : 22 April 2017</h4>
              	  </div>
              	  <div class="col-md-4">
            		<h4>Tanggal Diterima : </h4>
            	  </div>
            	  <div class="col-md-4">
            		<h4>Nama Customer : </h4>
            	  </div>
              </div>
            </div>
          </div>
          <br>
          <!-- info row -->
          <div class="row invoice-info">
          <!-- Table row -->
          <div class="row">
            <div class="col-xs-12 table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                  <th>Jumlah</th>
                  <th>Produk</th>
                  <th>Deskripsi</th>
                  <th>Subtotal</th>
                </tr>
                </thead>
                <tbody>
                <tr>
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
                </tr>
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
          <br><br><br>
          <div class="row">
          	<div class="col-xs-8">
          		
          	</div>
          	<div class="col-xs-4">
          		<p class="text-center">. . . . . . . . . . , . . . . . . . . . . . .</p>
          		<p class="text-center">Mengetahui Nama Penerima</p>
          		<br><br><br><br><br>
          		<div style="padding:20px">
          			<hr class="divider" style="border-color:#000">
          		</div>
          	</div>

          	</div>
          </div> 
        </div> 
        <!-- /. panel body -->
      </div>
    </div>
  
  </div>
@stop