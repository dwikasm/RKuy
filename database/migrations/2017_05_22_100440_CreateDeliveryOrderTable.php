<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deliveryorder', function (Blueprint $table) {
            $table->increments('id_deli');
            $table->unsignedInteger('id_tr');
            $table->timestamp('created_at')->useCurrent();

            $table->foreign('id_tr')->references('id_tr')->on('data_transaksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deliveryorder', function (Blueprint $table) {
            Schema::dropIfExists('deliveryorder');
        });
    }
}
