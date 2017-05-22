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
				        <th>Harga</th>
                <th>Stok Barang</th>
      				</tr>
    			</thead>
    			<tbody>
      			@foreach($produks as $key => $value)
            <tr>
              <td></td>
              <td>{{ $value->id_pro }}</td>
              <td>{{ $value->nama_pro }}</td>
              <td>{{ $value->harga }}</td>
              <td>{{ $value->stok }}</td>
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
	</div>
</div>
<br>
</div>
<br>
@stop