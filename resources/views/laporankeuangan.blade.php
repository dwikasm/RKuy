@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')<h1>Dashboard</h1>@stop
@section('content')
<div class="panel panel-default"><div class="panel-body">
<h4><i class="fa fa-home"></i> Tabel Laporan Keuangan</h4><hr>
<div class="row">
  <form>
    <div class="form-group">
      <div class="col-md-2">
        <label for="sel1">Pilih Bulan</label>
          <select class="form-control" id="sel1">
            <option>Januari</option>
            <option>Februari</option>
            <option>Maret</option>
            <option>April</option>
            <option>Mei</option>
            <option>Juni</option>
            <option>Juli</option>
            <option>Agustus</option>
            <option>September</option>
            <option>Oktober</option>
            <option>November</option>
            <option>Desember</option>
          </select>
           <input type="submit" class="btn-primary" name="bulan">
      </div>
      <div class="col-md-10">
        <a href="/#" class="btn btn-primary pull-right">
       <i class="fa fa-plus-circle"></i> Cetak Laporan</a></div>
      </div>
    </div>
  </form>
</div>
 
<!-- <div class=row><div class="col-md-6">
     <a href="/dosen/create" class="btn btn-primary">
       <i class="fa fa-plus-circle"></i> Tambah Quotation</a></div>
	<div class="col-md-2"> </div> -->
<!-- Form Pencarian -->
 <!-- 	<div class="col-md-4">
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
                <th>Modal Barang</th>
				        <th>Laba Kotor</th>
				        <th>Laba Bersih</th>
      				</tr>
    			</thead>
    			<tbody>
      			<tr>
			        <td>1</td>
			        <td>tr001</td>
			        <td>Rp.26.000.000</td>
			        <td>Rp.41.000.000</td>
			        <td>Rp.15.000.000</td>
      			</tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td>Total Laba Bersih :</td>
              <td>Rp.15.000.000</td>
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