<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Bien extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bien', function (Blueprint $table) {
            $table->bigIncrements('idbien');    
            $table->enum('typebien',['logement,terrain']);
            $table->string('localisation');
            $table->boolean('disponible');
            $table->unsignedBigInteger('idvisiteur');
            $table->unsignedBigInteger('idservice');
            $table->foreign('idvisiteur')->references('idvisiteur')->on('visiteur');
            $table->foreign('idservice')->references('idservice')->on('service');
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
        Schema::dropIfExists('bien');
    }
}
