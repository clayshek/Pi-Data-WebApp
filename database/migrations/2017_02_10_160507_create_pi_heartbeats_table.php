<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePiHeartbeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pi_heartbeats', function (Blueprint $table) {
            $table->integer('id')->unique()->unsigned();
            $table->foreign('id')->references('id')->on('pis');
            $table->string('hostname');
            $table->string('kernel');
            $table->string('uptime');
            $table->string('local_ip');
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
        Schema::dropIfExists('pi_heartbeats');
    }
}
