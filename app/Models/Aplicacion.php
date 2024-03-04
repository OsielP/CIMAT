<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aplicacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 
        'descripcion_corta',
        'descripcion_larga', 
        'peso', 
        'preescolar', 
        'primaria', 
        'secundaria', 
        'preparatoria', 
        'educacion_especial', 
        'lectura', 
        'matematicas', 
        'geografia', 
        'competencias_basicas', 
        'escritura', 
        'realidad_virtual', 
        'entretenimiento',
        'archivo', 
        'imagen', 
        'descargas'
    ];
}
