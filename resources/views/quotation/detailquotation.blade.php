@extends('adminlte::page')
@section('title', 'SI Maju Jaya')
@section('content_header')@stop
@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4><i class="fa fa-eye"></i> Detail Quotations</h4>
      </div>
      <div class="panel-body">
        <div class=row>
          <div class="col-md-12">                                                                                      
            <div class="table-responsive">          
              <table id="table" class="table table-bordered table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Satuan</th>
                    <th>Total Harga</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($results as $key => $value)
                  <tr>
                    <td>{{ $value->nama_pro }}</td>
                    <td>{{ $value->jumlah }}</td>
                    <td>{{ $value->harga }}</td>
                    <td>{{ $value->subtotal }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <div class="row no-print">
          <div class="col-md-12 text-right">
            <a href="javascript:window.print()"<button type="button" class="btn btn-default pull-left"/><i class="fa fa-print"></i> Cetak</button></a>
          </div>
        </div>
        <!-- /.row cetak -->
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
@stop
