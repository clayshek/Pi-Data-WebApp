<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ups', function (Blueprint $table) {
            $table->integer('id')->unique()->unsigned();
            $table->foreign('id')->references('id')->on('pis');
            $table->dateTime('date');
            $table->string('upsname');
            $table->string('model');
            $table->string('status');
            $table->string('linev');
            $table->string('loadpct');
            $table->string('bcharge');
            $table->string('timeleft');
            $table->string('battv');
            $table->string('lastxfer');
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
        Schema::dropIfExists('ups');
    }
}
