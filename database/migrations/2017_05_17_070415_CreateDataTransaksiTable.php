<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_transaksi', function (Blueprint $table) {
            $table->increments('id_tr');
            $table->unsignedInteger('id_quo');
            $table->string('customer');
            $table->text('alamat');
            $table->timestamp('created_at')->useCurrent();
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_transaksi');
    }
}
