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
          <div class="col-md-6 col-xs-6">
            <h3>{{ $quo[0]->nama_quo }} <small>Quotation #{{ $quo[0]->id_quo }}</small></h3>
          </div>
          <div class="col-md-2 col-md-offset-4 col-xs-2 col-xs-offset-4">
            <h3><small>{{ $quo[0]->created_at }}</small></h3>
          </div>
          <div class="col-md-12 col-xs-12">
            <div class="table-responsive">          
              <table id="table" class="table table-bordered table-condensed table-hover">
                <thead>
                  <tr>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Satuan</th>
                    <th>Subtotal Harga</th>
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
                <tfoot>
                  <tr>
                    <th></th>
                    <th></th>
                    <th>Total</th>
                    <th>{{ $quo[0]->total }}</th>
                  </tr>
                </tfoot>
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
