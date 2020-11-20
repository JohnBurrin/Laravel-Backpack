<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Machines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->enum('machine_type', ['Festoon', 'Plyer', 'Printer', 'Trimmer', 'Slitter', 'None'])->default('None');
            $table->mediumText('name');
            $table->mediumText('description');
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
        Schema::dropIfExists('machines');
    }
}
