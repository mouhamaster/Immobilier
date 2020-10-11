<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Annonce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce', function (Blueprint $table) {
            $table->bigIncrements('idannonce');
            $table->date('dateannonce');
            $table->text('description');
            $table->unsignedBigInteger('idagent');
            $table->unsignedBigInteger('idbien');
            $table->foreign('idagent')->references('idagent')->on('agentimmobilier');
            $table->foreign('idbien')->references('idbien')->on('bien');

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
        Schema::dropIfExists('annonce');
    }
}
