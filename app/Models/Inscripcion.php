<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = "inscripcion";

    public function scopeValidar($cadenaSQL, $dni)
    {
        return $cadenaSQL->where('dni', $dni);
    }
}
