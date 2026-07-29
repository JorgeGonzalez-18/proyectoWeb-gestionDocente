<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionDocente extends Model
{
    /** @use HasFactory<\Database\Factories\AsignacionDocenteFactory> */
    use HasFactory;
    protected $fillable =[
        'profesor_id',
        'catalogo_id',
        'codigo_curso',
        'carrera_id',
        'grupo_id',
        'inicio_cuatrimestre',
        'estado',
        'version_catalogo_aplicada',
        'provisional_validez_futura',
        'nota_tecnica_pdf_path',
        'nota_tecnica_fecha_limite',
        'nota_tecnica_estado',
    ];
    protected function casts(): array{
        return[
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
         ];
    }
}
