<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//hola
class Requisito extends Model
{
    protected $fillable = [
        'tramite_id',
        'descripcion'
    ];
    protected $table = 'requisitos';

    public function tramite()
    {
        return $this->belongsTo(Tramite::class);
    }
    
}
//hola
