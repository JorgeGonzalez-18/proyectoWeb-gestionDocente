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
            $table->id(primaryKey: true);
            $table->timestamps();
            $table->CarreraId('carrera_id');
            $table->CodigoCurso('codigo_curso');
            $table->integer('version');
            $table->NumeroAcuerdo('acuerdo_consejo');
            $table->Numerogaceta('numero_gaceta');
            $table->date('periodo_validez_inicio');
            $table->date('periodo_validez_fin');
            $table->json('especializaciones_atentes')->nullable();

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
