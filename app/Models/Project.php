<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Campos permitidos para asignación masiva desde tus formularios
    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'responsable',
        'monto',
        'estado',
    ];
}
