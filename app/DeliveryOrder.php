<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryOrder extends Model
{
    //protected $table = 'deliveryorder';
    protected $table = 'produk';

    protected $fillable = [
        'id_pro', 'nama_pro', 'harga', 'stok'
    ];
}
