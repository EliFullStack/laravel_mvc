<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function index() {

        $equipos = Equipo::paginate();
        
        return view('equipos.index', compact('equipos'));
    }

    public function create() {
        return view('equipos.create');
    }

    public function show($id) {

        $equipo = Equipo::find($id);
        //return $equipo;
        return view('equipos.show', compact('equipo'));
    }
}
