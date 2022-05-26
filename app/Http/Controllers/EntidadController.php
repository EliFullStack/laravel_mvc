<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntidadController extends Controller
{
    public function index() {
        return "ESTAS SON LAS ENTIDADES";
    }

    public function show($entidad, $equipo = null, $player = null) {
        if($player) {
            return "Esta es la jugadora $player, del equipo $equipo, que pertenece a $entidad";
        } elseif ($equipo) {
            return "Este es el equipo $equipo, que pertenece a $entidad";
        } else {
            return "ENTIDAD: $entidad";
        };
    }
}
