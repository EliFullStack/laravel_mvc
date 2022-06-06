<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    use HasFactory;
    
    protected $table = "entidades";

    public function equipos() {
        return $this->hasMany('App\Models\Equipo');
    }
}
