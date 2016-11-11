<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBabyImmunitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baby_immunitations', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('idBaby')->unsigned();
            $table->foreign('idBaby')->references('id')->on('babys');
            $table->integer('idVaccine')->unsigned();
            $table->foreign('idVaccine')->references('id')->on('vaccines');
            $table->date('immutation_date');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baby_immunitations');
    }
}