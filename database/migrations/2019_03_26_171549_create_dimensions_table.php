<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dimensions', function (Blueprint $table) {
            $table->bigIncrements('dim_id');
            $table->string('varient_id');
            $table->string('length');
            $table->string('width');
            $table->string('height');
            $table->string('wbase');
            $table->string('ground');
            $table->string('kweight');
            $table->string('cvolume');
            $table->string('trtype');
            $table->string('tsize');
            $table->string('seat');
            $table->string('door');
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
        Schema::dropIfExists('dimensions');
    }
}
