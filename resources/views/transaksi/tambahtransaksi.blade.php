@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')@stop
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<h3>Tambah Transaksi</h3>
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="#" method="post">
 							{{csrf_field()}}
 							<div class="form-group{{ $errors->has('nrp') ? ' has-error' : '' }}">
 								<input type="text" name="customer" class="form-control" placeholder="Customer">
 								{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
 							</div>
 							<div id="divTambahBarang" class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
 								<div class="form-group col-md-4">
	 								<label for="sel1">Pilih Barang</label>
							          <select class="form-control" id="sel1">
							            <option>Kursi Roda</option>
							            <option>Kasur RS</option>
							            <option>Stetoscope</option>
							          </select>
						        </div>
						        <div class="form-group col-md-2">
						        	<label>Jumlah</label>
	 								<input type="text" name="alamat" class="form-control" placeholder="1">
 									{!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
						        </div>
						        <div class="form-group col-md-2">
						        	<label>Tambahkan</label>
	 								<button id="buttonTambah" type="button" class="btn btn-default"">tambah</button>
						        </div>
 							</div>
						</form>
					</div>
				</div>
		</div>
		<div class="col-md-4">
		<h3>Keranjang Transaksi</h3> 
			<div class="panel panel-default">
				<div class="table-responsive">
					<table class="table">
						<thead>
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
								<td></td>
								<td></td>
								<td>Total :</td>
								<td>Rp.30.000.000</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td><button type="button" class="btn btn-primary">Submit</button></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <script type="text/javascript">
	$(document).ready(function(){
		$("#buttonTambah").click(function(){
			$('#divTambahBarang').clone().appendTo('#forAppend');
		})
	})
</script> -->
@stop

