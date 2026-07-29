<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
Schema::create('asignacion_docentes', function (Blueprint $table) {
    $table->id();
    $table->foreignId('profesor_id')->constrained('profesors')->cascadeOnDelete();
    $table->foreignId('curso_id')->nullable()->constrained('cursos')->nullOnDelete();
    
    // Campos del Excel
    $table->string('grupo_id');
    $table->string('modalidad')->nullable();     // Presencial, Virtual, Híbrida
    $table->string('horario')->nullable();
    $table->integer('cupo')->nullable();
    $table->string('aula')->nullable();
    $table->text('recursos')->nullable();        // Laboratorio, equipamiento
    $table->boolean('tiene_atinencia')->nullable(); // SI/NO
    $table->text('observaciones')->nullable();
    
    // Auditoria/estado
    $table->string('estado')->default('activo');
    $table->date('inicio_cuatrimestre_fecha');
    $table->timestamps();
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
