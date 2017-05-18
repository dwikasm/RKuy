@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')<h1>Dashboard</h1>@stop
@section('content')
<div class="panel panel-default"><div class="panel-body">
<h4><i class="fa fa-home"></i> Tabel Produk</h4><hr>
<div class=row><div class="col-md-6">
     <a href="{{Url('kelolabarang/tambah')}}" class="btn btn-primary">
       <i class="fa fa-plus-circle"></i> Tambah Produk</a></div>
	<div class="col-md-2"> </div>
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
				        <th>Id Produk</th>
				        <th>Nama Produk</th>
				        <th>Stok Barang</th>
				        <th>Harga Jual</th>
				        <th>Harga Beli</th>
      				</tr>
    			</thead>
    			<tbody>
      			<tr>
			        <td>1</td>
			        <td>prod001</td>
			        <td>Kursi Roda</td>
			        <td>5</td>
			        <td>Rp.6.500.000</td>
			        <td>Rp.5.000.000</td>
			        <td>
			        	<button type="button" class="btn btn-primary">Edit</button>
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