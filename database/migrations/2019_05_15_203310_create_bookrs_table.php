<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookrs', function (Blueprint $table) {
            $table->bigIncrements('cbid');
            $table->string('manid');
            $table->string('userid');
            $table->string('district');
            $table->string('model');
            $table->string('varient');
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
        Schema::dropIfExists('bookrs');
    }
}
