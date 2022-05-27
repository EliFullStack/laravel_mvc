<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntidadController extends Controller
{
    public function index() {
        return view('entidades.index');
    }

    public function show($entidad, $equipo = null, $player = null) {
        return view('entidades.show', ['entidad' => $entidad, 'equipo' => $equipo, 'player' =>$player]);
    }
}
