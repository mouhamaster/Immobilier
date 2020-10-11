<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Agentimmobilier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agentimmobilier', function (Blueprint $table) {
            $table->bigIncrements('idagent');
            $table->timestamps();
            $table->string('prenom');
            $table->string('nom');
            $table->string('telephone')->unique();
            $table->string('adresse');
            $table->string('login')->unique();
            $table->string('mdp')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agentimmobilier');
    }
    
}
