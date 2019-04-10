<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkerCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_costs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('numOfWorker');
            $table->string('workingHour');
            $table->string('costPerWorker');
            $table->string('totalCost');
            $table->timestamps();
        });
    }

  
    ];
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('worker_costs');
    }
}


            