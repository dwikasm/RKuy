@extends('adminlte::page')
@section('title', 'SI Maju Jaya')
@section('content_header')@stop
@section('content')
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4><i class="fa fa-archive"></i> Kelola Barang</h4>
      </div>
      <div class="panel-body">
        <div class=row>
          <div class="col-md-12" style="padding-bottom: 1.5rem">
            <a href="{{Url('/kelolabarang/tambah')}}" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i> Tambah Produk</a>
          </div>
          <!-- /.col-md-12 -->
          <div class="col-md-12">                                                                                      
            <div class="table-responsive">          
              <table id="myTable" class="table table-bordered table-condensed table-hover">
                <thead>
                  <tr>
                    <th width="80">ID Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th width="80">Stok Barang</th>
                    <th width="180" class="text-center">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($produks as $key => $value)
                  <tr>
                    <td class="text-center">{{ $value->id_pro }}</td>
                    <td>{{ $value->nama_pro }}</td>
                    <td>{{ $value->harga }}</td>
                    <td class="text-center">{{ $value->stok }}</td>
                    <td class="text-center">
                      <a href="{{Url('/kelolabarang/edit/'.$value->id_pro)}}">
                        <button type="button" class="btn btn-default btn-sm">Edit</button>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal{{$value->id_pro}}">Hapus</button>
                    </td>
                  </tr>
                  

                  <!-- Modal -->
                  <div class="modal fade" id="myModal{{$value->id_pro}}" role="dialog">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <div class="modal-header bg-red">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Anda Yakin?</h4>
                        </div>
                        <div class="modal-body">
                          <p>Proses ini akan menghapus {{$value->nama_pro}}.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="pull-left btn btn-default btn-sm" data-dismiss="modal">Tidak</button>
                          <a href="{{Url('/kelolabarang/delete/'.$value->id_pro)}}"><button type="button" class="btn btn-default btn-sm">Hapus</button>
                      </a>
                        </div>
                      </div>
                    </div>
                  </div>

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