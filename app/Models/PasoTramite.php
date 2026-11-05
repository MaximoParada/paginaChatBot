<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasoTramite extends Model
{
     protected $table = 'pasos_tramite';
     protected $fillable = [
        'tramite_id',
        'numero',
        'descripcion'
    ];

    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }
}
