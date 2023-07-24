<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaTemas extends Migration
{
    public function up()
    {
        Schema::create('temas', function (Blueprint $table) {
            $table->increments('idTema');
            $table->string('nombre', 40);
            $table->string('descripcion', 500);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('temas');
    }
}
