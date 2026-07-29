<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignacionDocente extends Model
{
    /** @use HasFactory<\Database\Factories\AsignacionDocenteFactory> */
    use HasFactory;
  protected $fillable = [
        'profesor_id',
        'curso_id',
        'grupo_id',
        'modalidad',
        'horario',
        'cupo',
        'aula',
        'recursos',
        'tiene_atinencia',
        'observaciones',
        'estado',
        'inicio_cuatrimestre_fecha',
    ];
    protected function casts(): array{
        return[
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
         ];
    }
}
