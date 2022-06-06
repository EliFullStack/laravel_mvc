<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $table = "planteles";

    //Relación uno a muchos (inversa)

    public function equipo() {
        return $this->belongsTo('App\Models\Equipo');
    }
}
