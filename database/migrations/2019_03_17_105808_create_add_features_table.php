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
            $table->bigIncrements('tid');
            $table->string('email');
            $table->string('car_id');
            $table->string('image');
            $table->string('cartype');
            $table->string('varient');
            $table->string('engine');
            $table->string('fuel');
            $table->string('milage');
            $table->string('power');
            $table->string('torque');
            $table->string('seat');
            $table->string('trans');
            $table->string('gear');
            $table->string('speed');
            $table->string('acceleration');
            $table->string('fsuspension');
            $table->string('rsuspension');
            $table->string('frontbrake');
            $table->string('rearbrake');
            $table->string('tradius');
            $table->string('length');
            $table->string('width');
            $table->string('height');
            $table->string('ground');
            $table->string('wheelbase');
            $table->string('kerb');
            $table->string('grossw');
            $table->string('cargo');
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
        Schema::dropIfExists('add_features');
    }
}
