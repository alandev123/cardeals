<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeature2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature2s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('car_id');
            $table->string('em');
            $table->string('tid');
            $table->string('abs');
            $table->string('pos');
            $table->string('pow');
            $table->string('ac');
            $table->string('rac');
            $table->string('msteer');
            $table->string('cruise');
            $table->string('rps');
            $table->string('tsn');
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
        Schema::dropIfExists('feature2s');
    }
}
