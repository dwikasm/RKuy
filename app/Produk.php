<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
<<<<<<< HEAD

    protected $fillable = [
        'id_pro', 'harga', 'stok',
=======
    protected $fillable = [
        'id_pro', 'nama_pro', 'harga', 'stok',
>>>>>>> 750096a4d6be91a26c8626632f823fccd2451038
    ];
}
