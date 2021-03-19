<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    use HasFactory;

    // Relacion uno a muchos
    public function telefonos() {
        return $this->hasMany('App\Models\Telefono');
    }
}
