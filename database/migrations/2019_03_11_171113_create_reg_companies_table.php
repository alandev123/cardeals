<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_companies', function (Blueprint $table) {
            $table->bigIncrements('company_id');
            $table->string('email');
            $table->foreign('email')->references('email')->on('first_regs');
            $table->string('utype');
            $table->string('cin');
            $table->string('headoffice');
            $table->string('website');
            $table->string('year');
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
        Schema::dropIfExists('reg_companies');
    }
}
