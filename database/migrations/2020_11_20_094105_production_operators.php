<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductionOperators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_operators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->bigInteger('production_record_id');
            $table->bigInteger('operator_id');

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
