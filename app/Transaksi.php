<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
	protected $table = 'data_transaksi';

    protected $fillable = [
        'id_tr', 'id_quo', 'customer', 'alamat', 'created_at',
    ];
}