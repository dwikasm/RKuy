@extends('adminlte::page')
@section('title', 'SI Maju Jaya')
@section('content_header')@stop
@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4><i class="fa fa-bank"></i> List Transaksi</h4>
      </div>
      <!-- /.col-md-12 -->
      <div class="col-md-12">                                                                                      
        <div class="table-responsive">          
          <table id="myTable" class="table table-bordered table-condensed table-hover">
            <thead>
              <tr>
                <th>Tanggal Dibuat</th>
                <th>ID Transaksi</th>
                <th>ID Quotation</th>
                <th>Customer</th>
                <th>Alamat</th>
                <th>Detail</th>
              </tr>
            </thead>
            <tbody>
            @foreach($transaksis as $key => $value)
              <tr>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->id_tr }}</td>
                <td>{{ $value->id_quo }}</td>
                <td>{{ $value->customer }}</td>
                <td>{{ $value->alamat }}</td>
                <td><a href="{{Url('/transaksi/detail/'.$value->id_quo)}}"<button type="button" class="btn btn-default btn-sm"/><i class="fa fa-eye"></i> Lihat</button></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.row -->

      </div>
    </div>  
@stop
@section('css')
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@stop
@section('js')
    <script src="http://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js "></script>
    <script>
      $(document).ready(function(){
        $('#myTable').DataTable();
    });
    </script>
@stop