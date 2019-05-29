<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSafetiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('safeties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('varient_id');
            $table->string('abs');
            $table->string('ebd');
            $table->string('cenlock');
            $table->string('psense');
            $table->string('adlock');
            $table->string('bassist');
            $table->string('cslock');
            $table->string('pabag');
            $table->string('rsabag');
            $table->string('dabag');
            $table->string('fsabag');
            $table->string('dnrvm');
            $table->string('sbwarn');
            $table->string('adseat');
            $table->string('dawarn');
            $table->string('klentry');
            $table->string('scsys');
            $table->string('hass');
            $table->string('rcam');
            $table->string('atdev');
            $table->string('adu');
            $table->string('pdl');
            $table->string('alarm');
            $table->string('tctrl');
            $table->string('ei');
            $table->string('ecwarn');
            $table->string('fhlamp');
            
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
        Schema::dropIfExists('safeties');
    }
}
