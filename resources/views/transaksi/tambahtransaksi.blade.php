@extends('adminlte::page')
@section('title', 'SI MAJU JAYA')
@section('content_header')@stop
@section('content')
  	<div class="row">
  		<div class="col-md-7">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><i class="fa fa-plus-circle"></i> Tambah Transaksi</h4>
				</div>
				<div class="panel-body">
					<form action="/transaksi/submit_data" method="post">
						{{csrf_field()}}
						<div class="form-group{{ $errors->has('nrp') ? ' has-error' : '' }}">
							<select class="form-control" name="id_quo">
								@foreach($quotations as $key => $value)
									<option value="{{$value->id_quo}}">{{$value->nama_quo}}</option>
								@endforeach
							</select>
							{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('nrp') ? ' has-error' : '' }}">
							<input type="text" name="customer" class="form-control" placeholder="Customer">
							{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="form-group{{ $errors->has('nrp') ? ' has-error' : '' }}">
							<input type="text" name="alamat" class="form-control" placeholder="Alamat Customer">
							{!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
						</div>
						<div class="pull-right">
              				<button type="submit" class="btn btn-default btn-sm">Selesai</button>
            			</div>
					</form>
				</div>
			</div>
  		</div>
  	</div>
@stop

