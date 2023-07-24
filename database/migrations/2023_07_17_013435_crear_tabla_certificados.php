<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCertificados extends Migration
{
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->increments('idCertificado');
            $table->integer('idCiudadano');
            $table->date('fechaGeneracion');
            $table->string('radicado', 50);
            $table->string('archivopdf', 200);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('certificados');
    }
}
