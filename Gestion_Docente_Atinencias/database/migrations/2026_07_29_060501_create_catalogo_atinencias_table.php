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
        Schema::create('catalogo_atinencias', function (Blueprint $table) {
            $table->id();

            $table->foreignId('carrera_id')->constrained('carreras')->cascadeOnDelete();
            $table->string('codigo_curso');
            $table->string('acuerdo_consejo');
            $table->string('numero_gaceta');
            $table->date('periodo_validez_inicio');
            $table->date('periodo_validez_fin');
            $table->integer('version');
            $table->json('especializaciones_atinentes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogo_atinencias');
    }
};
