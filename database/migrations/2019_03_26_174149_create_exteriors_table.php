<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExteriorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exteriors', function (Blueprint $table) {
            $table->bigIncrements('ext_id');
            $table->string('varient_id');
            $table->string('ahlamp');
            $table->string('ffog');
            $table->string('rfog');
            $table->string('rww');
            $table->string('awheel');
            $table->string('sroof');
            $table->string('rrail');
            $table->string('orvm');
            $table->string('rsw');
            $table->string('rwash');
            $table->string('wcover');
            $table->string('spoiler');
            $table->string('carrier');
            $table->string('rmi');
            $table->string('cgrill');
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
        Schema::dropIfExists('exteriors');
    }
}
