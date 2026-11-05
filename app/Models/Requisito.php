<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//hola
class Requisito extends Model
{
    protected $fillable = [
    'nombre',
    'descripcion',
    'activo'
    ];
    protected $table = 'requisitos';

    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }
    
}
