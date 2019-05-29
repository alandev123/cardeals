<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_ads', function (Blueprint $table) {
            $table->bigIncrements('adid');
            $table->string('companyid');
            $table->string('model');
            $table->string('image');
            $table->string('price');
            $table->string('tag');
            $table->string('date');
            $table->string('bhp');
            $table->string('milage');
            $table->string('varient');
            $table->string('fuel');
            $table->string('trans');
            $table->string('status');
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
        Schema::dropIfExists('add_ads');
    }
}
