<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaAdministradores extends Migration
{
    public function up()
    {
        Schema::create('administradores', function (Blueprint $table) {
            $table->increments('idAdministrador');
            $table->string('nombres', 40);
            $table->string('apellidos', 40);
            $table->string('tipoDoc', 20);
            $table->string('documento', 14);
            $table->string('correo', 40);
            $table->string('contrasena', 60);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('administradores');
    }
}
