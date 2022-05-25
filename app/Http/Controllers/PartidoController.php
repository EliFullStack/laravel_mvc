<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function index() {
        return view('partidos.index');
    }

    public function create() {
        return view('partidos.create');
    }

    public function show($game) {
        return view('partidos.show', ['partido' => $game]);
    }
}
