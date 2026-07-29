<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogoAtinencia extends Model
{
    /** @use HasFactory<\Database\Factories\CatalogoAtinenciaFactory> */
    use HasFactory;
    protected $fillable =[
        'carrera_id',
        'codigo_curso',
        'version',
        'acuerdo_consejo',
        'numero_gaceta',
        'periodo_validez_inicio',
        'periodo_validez_fin',
        'especializaciones_atinentes',
    ];
    protected function casts(): array{
        return[
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
            'especializaciones_atinentes' => 'array',
         ];
    }
}
