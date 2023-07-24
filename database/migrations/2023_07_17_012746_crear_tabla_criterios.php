<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaCriterios extends Migration
{
    public function up()
    {
        Schema::create('criterios', function (Blueprint $table) {
            $table->increments('idCriterio');
            $table->string('nombre', 40);
            $table->string('condicion', 40);
            $table->string('valor1', 200);
            $table->string('valor2', 200)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('criterios');
    }
}
