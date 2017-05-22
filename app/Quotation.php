<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    public function produk()
    {
    	return $this->belongsToMany('App\Produk', 'produk_quotations', 'id_quotation', 'id_produk');
    }
}
