@extends('adminlte::page')
@section('title', 'SI Maju Jaya')
@section('content_header')@stop
@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4><i class="fa fa-list"></i> Tabel Quotation</h4>
      </div>
      <div class="panel-body">
        <div class=row>
          <div class="col-md-12" style="padding-bottom: 1.5rem">
            <a href="{{Url('quotation/tambah')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah Quotation Baru</a>
          </div>
          <!-- /.col-md-12 -->
          <div class="col-md-12">                                                                                      
            <div class="table-responsive">          
              <table id="myTable" class="table table-bordered table-condensed table-hover">
                <thead>
                  <tr>
                    <th width="80">ID Quotation</th>
                    <th>Nama Quotation</th>
                    <th>Total Harga</th>
                    <th>Waktu Pembuatan</th>
                    <th width="80">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($quotations as $key => $value)
              <tr>
                <td class="text-center">{{ $value->id_quo }}</td>
                <td>{{ $value->nama_quo }}</td>
                <td>{{ $value->total }}</td>
                <td>{{ $value->created_at }}</td>
                <td><a href="{{Url('/quotation/detail/'.$value->id_quo)}}"<button type="button" class="btn btn-default btn-sm"/><i class="fa fa-eye"></i> Lihat</button></a></td>
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