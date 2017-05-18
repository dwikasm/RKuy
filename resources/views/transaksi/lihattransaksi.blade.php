@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')<h1>Dashboard</h1>@stop
@section('content')
<div class="panel panel-default"><div class="panel-body">
<h4><i class="fa fa-home"></i> Tabel Transaksi</h4><hr>
<div class=row>
	<div class="col-md-2">
     <a href={{Url('/transaksi/tambah')}} class="btn btn-primary">
       <i class="fa fa-plus-circle"></i> Tambah Transaksi</a>
    </div>
    <div class="col-md-2">
    	<a href="/deliveryorder" class="btn btn-default">
       <i class="fa fa-plus-circle"></i> Buat Delivery Order</a>
    </div>
    <div class="col-md-2">
    	<a href="/paymentreceipt" class="btn btn-default">
       <i class="fa fa-plus-circle"></i> Buat Payment Receipt</a>
    </div>
    <div class="col-md-2">
    	<a href="/proofoir" class="btn btn-default">
       <i class="fa fa-plus-circle"></i> Buat Proof of Item Receipt</a>
    </div>
</div>
<!-- Form Pencarian -->
 	<!-- <div class="col-md-4">
 		{!! Form::open(['method'=>'GET','url'=>'caridosen','role'=>'search'])  !!}
 			<div class="input-group custom-search-form">
  				<input type="text" class="form-control" name="search" placeholder="Search...">
   				<span class="input-group-btn">
   					<span class="input-group-btn">
  						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i> Cari</button>
  					</span>
  				</span>
 			</div>
  		{!! Form::close() !!}
	</div> -->
	<div class="container">
  		<br><br>	                                                                                      
  		<div class="table-responsive">          
  			<table class="table">
    			<thead>
      				<tr>
				        <th>#</th>
				        <th>Id Transaksi</th>
				        <th>Waktu</th>
				        <th>Customer</th>
				        <th>Total Harga</th>
      				</tr>
    			</thead>
    			<tbody>
      			<tr>
			        <td>1</td>
			        <td>tf001</td>
			        <td>17/05/2017 10:55:53</td>
			        <td>RS Puri Raharja</td>
			        <td>Rp.80.000.000</td>
			        <td>
              <a href="{{Url('/transaksi/detail')}}"
			        	<button type="button" class="btn btn-default">Lihat</button></a>
			        	<button type="button" class="btn btn-danger">Hapus</button>
			        </td>
			       
      			</tr>
    			</tbody>
 			 </table>
  		</div>
	</div>
</div>
<br>
</div>
<br>
@stop