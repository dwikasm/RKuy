<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->increments('id_pro');
            $table->string('nama_pro');
            $table->integer('harga');
            $table->integer('stok');
        });
        Schema::create('data_transaksi', function (Blueprint $table) {
            $table->increments('id_tr');
            $table->unsignedInteger('id_quo');
            $table->string('customer');
            $table->text('alamat');
            $table->timestamps();
        }); 
        Schema::create('data_quotation', function (Blueprint $table) {
            $table->increments('id_quo');
            $table->string('nama_quo');
            $table->integer('total');
            $table->timestamps();
        });  
        Schema::create('data_quotation_produk', function (Blueprint $table) {
            $table->increments('id_quo_pro');
            $table->unsignedInteger('id_quo');
            $table->unsignedInteger('id_pro');
            $table->integer('jumlah');
            $table->integer('subtotal');
        });
        Schema::create('deliveryorder', function (Blueprint $table) {
            $table->increments('id_deli');
            $table->unsignedInteger('id_tr');
            $table->timestamps();
        });
        Schema::create('proofofitemreceipt', function (Blueprint $table) {
            $table->increments('id_proof');
            $table->unsignedInteger('id_tr');
            $table->timestamps();
        });
        Schema::table('data_transaksi', function (Blueprint $table) {
            $table->foreign('id_quo')->references('id_quo')->on('data_quotation')->onDelete('cascade');;
        });

        Schema::table('data_quotation_produk', function (Blueprint $table) {
            $table->foreign('id_quo')->references('id_quo')->on('data_quotation')->onDelete('cascade');;
            $table->foreign('id_pro')->references('id_pro')->on('produk')->onDelete('cascade');;
        });

        Schema::table('deliveryorder', function (Blueprint $table) {
            $table->foreign('id_tr')->references('id_tr')->on('data_transaksi')->onDelete('cascade');
        });

        Schema::table('proofofitemreceipt', function (Blueprint $table) {
            $table->foreign('id_tr')->references('id_tr')->on('data_transaksi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proofofitemreceipt');
        Schema::dropIfExists('deliveryorder');
        Schema::dropIfExists('data_quotation_produk');
        Schema::dropIfExists('data_transaksi');
        Schema::dropIfExists('data_quotation');
        Schema::dropIfExists('produk');
    }
}
