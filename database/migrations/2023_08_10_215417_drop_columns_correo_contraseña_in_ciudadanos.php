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
        Schema::table('ciudadanos', function (Blueprint $table) {
            $table->dropColumn('contrasena');
            $table->dropColumn('correo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ciudadanos', function (Blueprint $table) {
            $table->string('correo', 40)->after('telFijo');
            $table->string('contrasena', 60)->after('correo');
        });
    }
};
