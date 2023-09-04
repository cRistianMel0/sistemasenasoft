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
            $table->dropColumn('nombre');
            $table->dropColumn('condicion');
            $table->dropColumn('valor1');
            $table->dropColumn('valor2');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('criterios', function (Blueprint $table) {
            $table->string('nombre', 40);
            $table->string('condicion', 40);
            $table->string('valor1', 200);
            $table->string('valor2', 200)->nullable();
        });
    }
};
