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
        //
        Schema::table('ciudadanos', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('idCiudadano');
        });
        Schema::table('administradores', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('idAdministrador');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('ciudadanos', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
        Schema::table('administradores', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
};
