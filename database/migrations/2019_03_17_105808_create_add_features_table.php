<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_features', function (Blueprint $table) {
            $table->bigIncrements('varient_id');
            $table->string('car_id');
            $table->foreign('car_id')->references('car_id')->on('add_cars');
            $table->string('image');
            $table->string('cartype');
            $table->string('varient');
            $table->string('entype');
            $table->string('endes');
            $table->string('cc');
            $table->string('power');
            $table->string('torque');
            $table->string('cylinder');
            $table->string('valves');
            $table->string('dtype');
            $table->string('fsupply');
            $table->string('trans');
            $table->string('gear');
            $table->string('clutch');
            $table->integer('price');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_features');
    }
}
