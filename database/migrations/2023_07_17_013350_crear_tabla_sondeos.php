<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaSondeos extends Migration
{
    public function up()
    {
        Schema::create('sondeos', function (Blueprint $table) {
            $table->increments('idSondeo');
            $table->integer('idAdministrador');
            $table->integer('idTema');
            $table->integer('idCriterio')->nullable();
            $table->string('titulo', 100);
            $table->string('descripcion', 500);
            $table->string('resultado', 200);
            $table->datetime('fechaHoraInicio');
            $table->datetime('fechaHoraFin');
            $table->string('imagen', 200)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sondeos');
    }
}
