@extends('adminlte::page')
@section('title', 'SI Maju Jaya')
@section('content_header')@stop
@section('content')
<section class="content">
  <div class="row">
    <div class="col-md-4">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Edit Produk</h3>
        </div>
		    <form role="form" action="/kelolabarang/submitedit/{{$produk->id_pro}}" method="post">
		    {{ csrf_field() }}
		      <div class="box-body">
		        <div class="form-group">
		          <label for="nama_pro">Nama</label>
		          <input type="text" class="form-control"  name="nama_pro" id="nama_pro" value="{{$produk->nama_pro}}">
		        </div>
		        <div class="form-group">
		          <label for="harga">Harga</label>
		          <input type="text" class="form-control" name="harga" id="harga" value="{{$produk->harga}}">
		        </div>
		        <div class="form-group">
		          <label for="stok">Stok</label>
		          <div class="input-group">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="stok">
                          <span class="glyphicon glyphicon-minus"></span>
                        </button>
                      </span>
                      <input type="text" name="stok" class="form-control input-number" name="stok" id="stok" value="{{$produk->stok}}" min="1" max="1000">
                      <span class="input-group-btn">
                        <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="stok">
                          <span class="glyphicon glyphicon-plus"></span>
                        </button>
                      </span>
                  </div>
		          <!-- <input type="text" class="form-control" name="stok" id="stok" value="{{$produk->stok}}"> -->
		        </div>
		      </div>

		      <div class="box-footer">
		        <button type="submit" class="btn btn-primary pull-right">Edit</button>
		      </div>
		    </form>
	    </div>
    </div>
  </div>
</section>
@stop
@section('js')
    <script type="text/javascript">
      //plugin bootstrap minus and plus
    //http://jsfiddle.net/laelitenetwork/puJ6G/
    $('.btn-number').click(function(e){
        e.preventDefault();
        
        fieldName = $(this).attr('data-field');
        type      = $(this).attr('data-type');
        var input = $("input[name='"+fieldName+"']");
        var currentVal = parseInt(input.val());
        if (!isNaN(currentVal)) {
            if(type == 'minus') {
                
                if(currentVal > input.attr('min')) {
                    input.val(currentVal - 1).change();
                } 
                if(parseInt(input.val()) == input.attr('min')) {
                    $(this).attr('disabled', true);
                }

            } else if(type == 'plus') {

                if(currentVal < input.attr('max')) {
                    input.val(currentVal + 1).change();
                }
                if(parseInt(input.val()) == input.attr('max')) {
                    $(this).attr('disabled', true);
                }

            }
        } else {
            input.val(0);
        }
    });
    $('.input-number').focusin(function(){
       $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {
        
        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());
        
        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        
        
    });
    $(".input-number").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                 // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) || 
                 // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                     // let it happen, don't do anything
                     return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    </script>
@stop