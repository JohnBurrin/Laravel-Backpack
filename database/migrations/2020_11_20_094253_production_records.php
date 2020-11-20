<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductionRecords extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->bigInteger('machine_id');
            $table->bigInteger('shift_pattern_id');
            $table->timestamp('record_date');
            $table->text('remarks');

            $table->timestamps();

            $table->index(array('id'));
        });
    }

     /**
       * Reverse the migrations.
       *
       * @return void
       */
    public function down()
    {
        Schema::dropIfExists('production_records');
    }
}
