<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'activo'
    ];

    protected $table = 'categorias';

    public function tramites()
    {
        return $this->hasMany(Tramite::class);
    }
}
