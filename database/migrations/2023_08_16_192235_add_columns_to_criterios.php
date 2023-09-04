<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Attributes\After;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('criterios', function (Blueprint $table) {
            $table->string('sexo', 200)->nullable()->after('idCriterio');
            $table->string('etnia', 200)->nullable()->after('sexo');
            $table->string('edad', 200)->nullable()->after('etnia');
            $table->string('estrato', 200)->nullable()->after('edad');
            $table->string('discapacidad', 200)->nullable()->after('estrato');
            $table->string('nivelEducativo', 200)->nullable()->after('discapacidad');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('criterios', function (Blueprint $table) {
            $table->dropColumn('sexo');
            $table->dropColumn('etnia');
            $table->dropColumn('edad');
            $table->dropColumn('estrato');
            $table->dropColumn('discapacidad');
            $table->dropColumn('nivelEducativo');
        });
    }
};
