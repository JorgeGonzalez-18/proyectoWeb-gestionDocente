<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    /** @use HasFactory<\Database\Factories\ProfesorFactory> */
    use HasFactory;
    protected $fillable =[
        'cedula',
        'correo',
        'nombre',
        'primer_apellido',
        'segundo_apellido',
    ];
    protected function casts(): array{
        return[
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
         ];
    }
}
