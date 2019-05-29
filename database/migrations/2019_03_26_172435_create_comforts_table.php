<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComfortsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comforts', function (Blueprint $table) {
            $table->bigIncrements('com_id');
            $table->string('varient_id');
            $table->string('powerst');
            $table->string('powf');
            $table->string('powr');
            $table->string('acctrl');
            $table->string('rto');
            $table->string('tlight');
            $table->string('rar');
            $table->string('fch');
            $table->string('rac');
            $table->string('rshr');
            $table->string('rps');
            $table->string('msteer');
            $table->string('navigation');
            $table->string('aqc');
            $table->string('rflo');
            $table->string('cruise');
            $table->string('ssbtn');
            $table->string('gsi');
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
        Schema::dropIfExists('comforts');
    }
}
