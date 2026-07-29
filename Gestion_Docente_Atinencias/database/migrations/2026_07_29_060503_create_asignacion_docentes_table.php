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
        Schema::create('asignacion_docentes', function (Blueprint $table) {
            $table->id(primaryKey: true);
            $table->timestamps();
            $table->integer(foreignId: 'profesor_id');
            $table->unsignedInteger('catalogo_id')->nullable();
            $table->CodigoCurso('codigo_curso');
            $table->CarreraId('carrera_id');
            $table->GrupoId('grupo_id');
            $table->date('inicio_cuatrimestre_fecha');
            $table->EstadoAsignacionEnum('estado');
            $table->integer('version_catalogo_aplicada');
            $table->boolean('provisonal_validez_futura');
            $table->string ('nota_tecnica_pdf_path')->nullable();
            $table->date ('nota_tecnica_fecha_limite')->nullable();
            $table->EstadoNotaTecnicaEnum ('nota_tecnica_estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacion_docentes');
    }
};
