<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProofOfItemReceiptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('proofofitemreceipt', function (Blueprint $table) {
            $table->increments('id_proof');
            $table->unsignedInteger('id_tr');
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('id_tr')->references('id_tr')->on('data_transaksi');
            $table->foreign('id_quotation')->references('id_quotation')->on('data_quotation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('proofofitemreceipt', function (Blueprint $table) {
            Schema::dropIfExists('proofofitemreceipt');
        });
    }
}
