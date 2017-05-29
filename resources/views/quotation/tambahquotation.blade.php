@extends('adminlte::page')
@section('title', 'SI Maju Jaya')
@section('content_header')@stop
@section('content')
    <div class="row">
      <div class="col-md-7">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4><i class="fa fa-plus-circle"></i> Tambah Quotation</h4>
          </div>
          <!-- /. panel heading -->
          <div class="panel-body">
            <div class="row">
              <form action="/quotation/tambahproduk" method="post">
                {{csrf_field()}}
                
                <div id="divTambahBarang" class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                  <div class="form-group col-md-4">
                    <label for="sel1">Pilih Barang</label>
                      <select class="form-control" id="produks" name="produk">
                        @foreach ($produks as $produk)
                          <option value="{{$produk->id_pro}}">{{$produk->nama_pro}}</option>
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label>Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" value="1">
                    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
                  </div>
                  <div class="form-group col-md-2">
                    <label>Tambahkan</label>
                    <button id="buttonTambah" type="submit" class="btn btn-default"">Tambah</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /. pilih barang -->
            <div class="row">
              <div class="col-md-12">
                <form action="/quotation/submitproduk" method="post">
                  {{csrf_field()}}
                  <div class="form-group{{ $errors->has('nrp') ? ' has-error' : '' }}">
                    <label>Nama Quotation</label>
                    <input type="text" name="namaquotation" class="form-control" placeholder="Isi nama quotation" required="true">
                    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                  </div>
                  <!-- /. errors -->
                  <label>Rincian Harga Barang</label>
                  <table id="table" class="table table-bordered table-condensed table-striped">
                    <thead>
                      <tr>
                        <th>Nama Barang</th>
                        <th>Jumlah Barang</th>
                        <th>Harga Satuan</th>
                        <th>Subtotal Harga</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($order as $key => $produk)
                        <tr>
                          <td>{{ $produk->nama_pro }}</td>
                          <td>{{ $produk->jumlah }}</td>
                          <td>{{ $produk->harga }}</td>
                          <td>{{ $produk->subtotal }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <th></th>
                      <th></th>
                      <th>Total</th>
                      <th>{{ $total }}</th>
                    </tfoot>
                  </table>
                  <div class="pull-right">
                    <button type="submit" class="btn btn-primary btn-sm">Selesai</button>
                  </div>
                </form>
                <!-- /. nama quotation -->
                <form action="/quotation/cancelproduk" method="POST">
                  {{csrf_field()}}
                  <div class="pull-right" style="margin-right: 1rem">
                    <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                  </div>
                </form>
                <!-- /. batal submit -->
              </div>
            </div>
          </div>
          <!-- /. panel body -->
        </div>
        <!-- /. panel -->
      </div>
      <!-- /. col  -->
    </div>
    <!-- /. row -->

@stop

