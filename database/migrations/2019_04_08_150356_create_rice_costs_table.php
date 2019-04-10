<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiceCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rice_costs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('riceName'); 
            $table->string('riceQuality');
            $table->string('riceQuantity'); 
            $table->string('unitPrice'); 
            $table->string('totalPrice'); 
            $table->string('sellerName'); 
            $table->string('sellerPhone'); 
            $table->string('sellerAddress'); 
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
        Schema::dropIfExists('rice_costs');
    }
}
