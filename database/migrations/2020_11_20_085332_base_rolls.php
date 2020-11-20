<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BaseRolls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_rolls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->bigInteger('parent_id');
            $table->bigInteger('supplier_id')->nullable();
            $table->bigInteger('packing_list_id');
            $table->string('batch_number', 50);
            $table->double('paper_quality', 10, 2);
            $table->mediumText('roll_number_id');
            $table->string('roll_number', 8);
            $table->integer('roll_width');
            $table->double('roll_weight', 10, 2);
            $table->integer('roll_length');
            $table->dateTime('checked_out_at');
            $table->enum('status', ['unknown', 'inbound', 'delivered'])->default('unknown');
            $table->timestamps();

            $table->index(['batch_number','roll_number']);
        });
    }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
    public function down()
    {
        Schema::dropIfExists('base_rolls');
    }
}
