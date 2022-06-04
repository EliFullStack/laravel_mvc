<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
    public function index() {

        $partidos = Partido::orderBy('id', 'desc')->paginate();

        return view('partidos.index', compact('partidos'));
    }

    public function create() {
        return view('partidos.create');
    }

    public function store(Request $request) {
       // return $request->all();
       $partido = new Partido();
       $partido->fecha = $request->date;
       $partido->hora = $request->time;
       $partido->puntos_equipo_local = $request->home_points;
       $partido->puntos_equipo_visitante = $request->visiting_points;
       $partido->estado_partido = $request->estado;
       $partido->id_equipo_local = $request->home_team;
       $partido->id_equipo_visitante = $request->visiting_team;

      // return $partido;
      $partido->save();
      return redirect()->route('partidos.show', $partido); 
    }

    public function show(Partido $partido) {

       // $partido = Partido::find($id);
        return view('partidos.show', compact('partido'));
    }

    public function edit(Partido $partido) {
        //return $partido;
        return view('partidos.edit', compact('partido'));

    }

    public function update(Request $request, Partido $partido) {
        //return $request->all();
        
        $partido->fecha = $request->date;
        $partido->hora = $request->time;
        $partido->puntos_equipo_local = $request->home_points;
        $partido->puntos_equipo_visitante = $request->visiting_points;
        $partido->estado_partido = $request->estado;
        $partido->id_equipo_local = $request->home_team;
        $partido->id_equipo_visitante = $request->visiting_team;

        return $partido;
        /*
        $partido->save();
        return redirect()->route('partidos.show', $partido); */
    }
}
