<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFirstRegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_regs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('state');
            $table->string('district');
            $table->string('city');
            $table->string('utype');
            $table->string('email')->unique();
            $table->string('phone');
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
        Schema::dropIfExists('first_regs');
    }
}
