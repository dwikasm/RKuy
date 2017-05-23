@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')@stop
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h3>Tambah Quotation</h3>
        <div class="panel panel-default">
          <div class="panel-body">
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
                  <button id="buttonTambah" type="submit" class="btn btn-default"">tambah</button>
                </div>
              </div>
            </form>

            <form action="/quotation/submitproduk" method="post">
              {{csrf_field()}}
              <div class="form-group{{ $errors->has('nrp') ? ' has-error' : '' }}">
                <input type="text" name="customer" class="form-control" placeholder="Customer" required="true">
                {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
              </div>
              <h3>Total</h3>
              <h4>{{ $total }}</h4>
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
                  @foreach($order as $key => $produk)
                    <tr>
                      <td>{{ $produk->nama_pro }}</td>
                      <td>{{ $produk->jumlah }}</td>
                      <td>{{ $produk->harga }}</td>
                      <td>{{ $produk->subtotal }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="text-center">
                <button type="submit" class="btn btn-default btn-sm">Selesai</button>
              </div>
            </form>
            <form action="/quotation/cancelproduk" method="POST">
              {{csrf_field()}}
              <div class="text-center">
                <button type="submit" class="btn btn-danger btn-sm">Batal</button>
              </div>
            </form>
          </div>
        </div>
    </div>
    
  </div>
</div>

<!-- <script type="text/javascript">
  $(document).ready(function(){
    $("#buttonTambah").click(function(){
      $('#divTambahBarang').clone().appendTo('#forAppend');
    })
  })
</script> -->
@stop

