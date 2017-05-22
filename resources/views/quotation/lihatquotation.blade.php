<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')<h1>Dashboard</h1>@stop
@section('content')
<div class="panel panel-default"><div class="panel-body">
<h4><i class="fa fa-home"></i> Tabel Quotation</h4><hr>
<div class=row><div class="col-md-6">
     <a href="{{Url('quotation/tambah')}}" class="btn btn-primary">
       <i class="fa fa-plus-circle"></i> Tambah Quotation</a></div>
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
                <th>Id Quotation</th>
                <th>Waktu</th>
                <th>Customer</th>
                <th>Total Harga</th>
              </tr>
          </thead>
          <tbody>
          @foreach($quotations as $key => $value)
            <tr>
              <td></td>
              <td>{{ $value->id_quo }}</td>
              <td>{{ $value->total }}</td>
              <td>{{ $value->created_at }}</td>
              <td>
              <a href="{{Url('/quotation/cetak')}}">
                <button type="button" class="btn btn-default">Lihat</button></a>
                <!-- <button type="button" class="btn btn-primary">Edit</button> -->
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