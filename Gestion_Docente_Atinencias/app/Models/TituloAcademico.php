<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TituloAcademico extends Model
{
    /** @use HasFactory<\Database\Factories\TituloAcademicoFactory> */
    use HasFactory;
    protected $fillable =[
        'profesor_id',
        'nivel_titulo',
        'institucion',
        'anio_graduacion',
        'area_especializacion',
    ];
    protected function casts(): array{
        return[
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
         ];
    }
}
