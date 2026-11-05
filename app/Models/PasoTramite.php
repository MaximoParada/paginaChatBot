<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasoTramite extends Model
{
     protected $table = 'pasos_tramite';

    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }
}
