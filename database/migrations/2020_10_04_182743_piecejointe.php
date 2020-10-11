<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Piecejointe extends Migration
{

        /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('piecejointe', function (Blueprint $table) {
            $table->bigIncrements('idpiece');
            $table->unsignedBigInteger('idannonce');
            $table->string("ressource");
            $table->unsignedBigInteger('idagent');
            //

            $table->foreign('idannonce')->references('idannonce')->on('annonce');

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
        Schema::dropIfExists('piecejointe');
    }
    
}
