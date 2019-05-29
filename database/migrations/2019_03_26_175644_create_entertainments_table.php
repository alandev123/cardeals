<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntertainmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entertainments', function (Blueprint $table) {
            $table->bigIncrements('entr_id');
            $table->string('varient_id');
            $table->string('cd');
            $table->string('radio');
            $table->string('speaker');
            $table->string('usb');
            $table->string('bt');
            $table->string('rspeaker');
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
        Schema::dropIfExists('entertainments');
    }
}
