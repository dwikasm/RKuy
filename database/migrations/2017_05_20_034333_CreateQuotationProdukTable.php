<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuotationProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_quotation_produk', function (Blueprint $table) {
            $table->increments('id_quo_pro');
            $table->unsignedInteger('id_quo');
            $table->unsignedInteger('id_pro');
            $table->integer('jumlah');
            $table->integer('subtotal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_quotation_produk');
    }
}
