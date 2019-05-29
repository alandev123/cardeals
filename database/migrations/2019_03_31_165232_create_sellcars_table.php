<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellcarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sellcars', function (Blueprint $table) {
            $table->bigIncrements('usedcar_id');
            $table->string('user_id');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('make');
            $table->string('model');
            $table->string('condition');
            $table->integer('year');
            $table->integer('km');
            $table->string('fuel');
            $table->string('state');
            $table->string('district');
            $table->string('description');
            $table->integer('price');
            $table->string('availability');
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
        Schema::dropIfExists('sellcars');
    }
}
