@extends('adminlte::page')
@section('title', 'SI Maju Jaya')
@section('content_header')@stop
@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4><i class="fa fa-home"></i> Tabel Quotation</h4>
      </div>
      <div class="panel-body">
        <div class=row>
          <div class="col-md-12" style="padding-bottom: 1.5rem">
            <a href="{{Url('quotation/tambah')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Quotation</a>
          </div>
          <!-- /.col-md-12 -->
          <div class="col-md-12">                                                                                      
            <div class="table-responsive">          
              <table id="myTable" class="table table-bordered table-condensed table-hover">
                <thead>
                  <tr>
                    <th>ID Quotation</th>
                    <th>Waktu Quotation</th>
                    <th>Customer</th>
                    <th>Total Harga</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($quotations as $key => $value)
              <tr>
                <td>{{ $value->id_quo }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->total }}</td>
                <td></td>
                <td><a href="{{Url('/quotation/cetak')}}"><button type="button" class="btn btn-default">Lihat</button></a>
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