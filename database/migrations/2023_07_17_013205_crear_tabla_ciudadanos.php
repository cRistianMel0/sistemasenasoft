<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCiudadanos extends Migration
{
    public function up()
    {
        Schema::create('ciudadanos', function (Blueprint $table) {
            $table->increments('idCiudadano');
            $table->string('nombres', 40);
            $table->string('apellidos', 40);
            $table->string('tipoDoc', 20);
            $table->string('documento', 14);
            $table->string('sexo', 20);
            $table->string('telCelular', 16)->nullable();
            $table->string('telFijo', 16)->nullable();
            $table->string('correo', 40);
            $table->string('municipio', 40);
            $table->string('direccion', 20)->nullable();
            $table->string('barrioVereda', 40);
            $table->date('fechaNacimiento');
            $table->string('etnia', 20);
            $table->string('discapacidad', 40);
            $table->integer('estrato');
            $table->string('nivelEducativo', 40);
            $table->boolean('dispostivosTecnologicos');
            $table->string('mediosTecnologicos', 40)->nullable();
            $table->boolean('conectividadInternet');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ciudadanos');
    }
}
