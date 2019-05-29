<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuspensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suspensions', function (Blueprint $table) {
            $table->bigIncrements('sus_id');
            $table->string('varient_id');
            $table->string('fsus');
            $table->string('rsus');
            $table->string('shock');
            $table->string('steert');
            $table->string('steerc');
            $table->string('tradius');
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
        Schema::dropIfExists('suspensions');
    }
}
