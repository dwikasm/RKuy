<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('data_transaksi', function (Blueprint $table) {
            $table->foreign('id_quo')->references('id_quo')->on('data_quotation');
        });

        Schema::table('data_quotation_produk', function (Blueprint $table) {
            $table->foreign('id_quo')->references('id_quo')->on('data_quotation');
            $table->foreign('id_pro')->references('id_pro')->on('produk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
