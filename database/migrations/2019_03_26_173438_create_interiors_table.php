<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteriorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interiors', function (Blueprint $table) {
            $table->bigIncrements('int_id');
            $table->string('varient_id');
            $table->string('ac');
            $table->string('heater');
            $table->string('tmeter');
            $table->string('clock');
            $table->string('easeat');
            $table->string('dtd');
            $table->string('tameter');
            $table->string('lseat');
            $table->string('odo');
            $table->string('lswheel');
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
        Schema::dropIfExists('interiors');
    }
}
