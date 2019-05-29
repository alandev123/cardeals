<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUadvicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uadvices', function (Blueprint $table) {
            $table->bigIncrements('adviceid');
            $table->string('userid');
            $table->string('budget');
            $table->string('transmission');
            $table->string('pormi');
            $table->string('fuel');
            $table->string('build');
            $table->string('usage');
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
        Schema::dropIfExists('uadvices');
    }
}
