<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function index() {

        $partidos = Partido::paginate();

        return view('partidos.index', compact('partidos'));
    }

    public function create() {
        return view('partidos.create');
    }

    public function show($id) {

        $partido = Partido::find($id);
        return view('partidos.show', compact('partido'));
    }
}
