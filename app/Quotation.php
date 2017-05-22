<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
	protected $table = 'data_quotation';

    protected $fillable = [
        'id_quo', 'total', 'created_at',
    ];
}