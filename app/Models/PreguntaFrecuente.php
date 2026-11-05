<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreguntaFrecuente extends Model
{
    protected $table = 'preguntas_frecuentes';
    protected $fillable = [
        'tramite_id',
        'pregunta',
        'respuesta',
        'activo'
   ];

    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }
}
