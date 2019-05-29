<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->bigIncrements('per_id');
            $table->string('varient_id');
            $table->string('speed');
            $table->string('acce');
            $table->string('braking');
            $table->string('milage');
            $table->string('fuel');
            $table->string('tcapacity');
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
        Schema::dropIfExists('performances');
    }
}
