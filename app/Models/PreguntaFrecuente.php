<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreguntaFrecuente extends Model
{
    protected $table = 'preguntas_frecuentes';

    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }
}
