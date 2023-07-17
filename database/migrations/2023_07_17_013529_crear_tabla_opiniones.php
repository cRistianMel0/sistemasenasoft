<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaOpiniones extends Migration
{
    public function up()
    {
        Schema::create('opiniones', function (Blueprint $table) {
            $table->increments('idOpinion');
            $table->integer('idParticipacion');
            $table->integer('idSondeo');
            $table->string('pregunta', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('opiniones');
    }
}
