@extends('adminlte::page')
@section('title', 'AdminLTE')
@section('content_header')@stop
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8">
      <h3>Detail Transaksi id tf001</h3>
        <div class="panel panel-default">
          <div class="panel-body">
             <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Harga Satuan</th>
                  <th>Total Harga</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Kursi Roda</td>
                  <td>5</td>
                  <td>Rp6.000.000</td>
                  <td>Rp.30.000.000</td>
                </tr>
                <tr>
                  <td>Stetoscope</td>
                  <td>50</td>
                  <td>Rp1.000.000</td>
                  <td>Rp.50.000.000</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td>Total :</td>
                  <td>Rp.80.000.000</td>
                </tr>
              </tbody>
            </table>
        </div>
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

