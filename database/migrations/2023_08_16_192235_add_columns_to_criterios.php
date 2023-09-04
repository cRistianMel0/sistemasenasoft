<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('criterios', function (Blueprint $table) {
            $table->date('fechaInicio')->nullable();
            $table->date('fechaFin')->nullable();
            $table->string('sexo', 200)->nullable();
            $table->string('etnia', 200)->nullable();
            $table->string('edad', 200)->nullable();
            $table->string('estrato', 200)->nullable();
            $table->string('discapacidad', 200)->nullable();
            $table->string('nivelEducativo', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('criterios', function (Blueprint $table) {
            $table->dropColumn('fechaInicio');
            $table->dropColumn('fechaFin');
            $table->dropColumn('sexo');
            $table->dropColumn('etnia');
            $table->dropColumn('edad');
            $table->dropColumn('estrato');
            $table->dropColumn('discapacidad');
            $table->dropColumn('nivelEducativo');
        });
    }
};
