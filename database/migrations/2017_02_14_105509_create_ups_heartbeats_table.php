<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpsHeartbeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ups_heartbeats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pi_id')->unsigned();
            $table->foreign('pi_id')->references('id')->on('pis');
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
        Schema::dropIfExists('ups_heartbeats');
    }
}
