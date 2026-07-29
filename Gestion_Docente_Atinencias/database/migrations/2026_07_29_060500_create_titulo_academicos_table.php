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
        Schema::create('titulo_academicos', function (Blueprint $table) {
            $table->id(primaryKey: true);
            $table->timestamps();
            $table->integer('profesor_id');
            $table->NivelTituloEnum('nivel_titulo');
            $table->string('institucion');
            $table->integer('anio_graduacion');
            $table->string('area_especializacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titulo_academicos');
    }
};
