<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    public $timestamps = false;
    protected $fillable = [
        'id_pro', 'nama_pro', 'harga', 'stok',
    ];
}
