<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;

    // Relacion de uno a muchos (inversa)

    public function persona() {
        return $this->belongsTo('App\Models\Persona');
    }

    public function tipo() {
        return $this->belongsTo('App\Models\Tipo');
    }
}
