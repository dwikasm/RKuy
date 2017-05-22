@extends('adminlte::page')
@section('title', 'SI Maju Jaya')
@section('content_header')@stop
@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4><i class="fa fa-home"></i> Tabel Transaksi</h4>
      </div>
      <div class="panel-body">
        <div class=row>
          <div class="col-md-12" style="padding-bottom: 1.5rem">
            <a href="{{Url('/transaksi/tambah')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah Transaksi</a>
          </div>
          <!-- /.col-md-12 -->
          <div class="col-md-12">                                                                                      
            <div class="table-responsive">          
              <table id="myTable" class="table table-bordered table-condensed table-hover">
                <thead>
                  <tr>
                    <th>ID Transaksi</th>
                    <th>ID Quotation</th>
                    <th>Customer</th>
                    <th>Alamat</th>
                    <th>Tanggal Dibuat</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($transaksis as $key => $value)
                  <tr>
                    <td>{{ $value->id_tr }}</td>
                    <td>{{ $value->id_quo }}</td>
                    <td>{{ $value->customer }}</td>
                    <td>{{ $value->alamat }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td><a href="{{Url('/transaksi/detail')}}"<button type="button" class="btn btn-default btn-sm"/><i class="fa fa-eye"></i> Lihat</button></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
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