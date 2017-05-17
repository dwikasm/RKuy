<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataQuotationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_quotation', function (Blueprint $table) {
            $table->increments('id_quotation');
            $table->timestamp('waktu_quotation');
            $table->string('customer');
            $table->float('total_harga_q', 10, 2); 
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_quotation');
    }
}
