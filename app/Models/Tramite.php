<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    protected $fillable = [
    'categoria_id',
    'nombre',
    'descripcion',
    'tiempo_estimado',
    'modalidad',
    'activo'
    ];
    
    protected $table = 'tramites';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function requisitos()
    {
        return $this->hasMany(Requisito::class);
    }

    public function pasos()
    {
        return $this->hasMany(PasoTramite::class);
    }

    public function preguntas()
    {
        return $this->hasMany(PreguntaFrecuente::class);
    }

}
