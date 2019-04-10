<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiceProfitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rice_profits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('riceName'); 
            $table->string('riceQuality');
            $table->string('riceQuantity'); 
            $table->string('unitPrice'); 
            $table->string('totalPrice'); 
            $table->string('customerName'); 
            $table->string('customerPhone'); 
            $table->string('customerAddress');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rice_profits');
    }
}
