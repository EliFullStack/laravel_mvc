<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

   // protected $fillable = ['nombre', 'id_entidad'];
   protected $guarded = [];


   //Relación uno a muchos
   public function players() {
       return $this->hasMany('App\Models\Player');
   }

   public function partidos() {
       return $this->hasMany('App\Models\Partido');
   }

   public function entidad() {
       return $this->belongsTo('App\Models\Entidad');
   }
}
