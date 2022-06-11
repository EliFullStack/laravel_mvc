<?php

namespace App\Http\Controllers;

use App\Models\Partido;
use Illuminate\Http\Request;
use App\Http\Requests\StorePartido;
use App\Http\Requests\UpdatePartido;
use App\Models\Equipo;

class PartidoController extends Controller
{
    public function index() {

        $partidos = Partido::orderBy('id', 'desc')->paginate();

        return view('partidos.index', compact('partidos'));
    }

    public function create() {
        return view('partidos.create');
    }

    public function store(StorePartido $request) {

       // return $request->all();
      /* $partido = new Partido();
       $partido->fecha = $request->date;
       $partido->hora = $request->time;
       $partido->puntos_equipo_local = $request->home_points;
       $partido->puntos_equipo_visitante = $request->visiting_points;
       $partido->estado_partido = $request->estado;
       $partido->id_equipo_local = $request->home_team;
       $partido->id_equipo_visitante = $request->visiting_team;

      // return $partido;
      $partido->save();*/

      $partido = Partido::create([
        "fecha" => $request->date,
        "hora" => $request->time,
        "puntos_equipo_local" => $request->home_points,
        "puntos_equipo_visitante" => $request->visiting_points,
        "estado_partido" => $request->estado,
        "id_local" => $request->home_team,
        "id_visitante" => $request->visiting_team
    ]);

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

    public function update(UpdatePartido $request, Partido $partido) {

        //return $request->all();
        
    /*    $partido->fecha = $request->date;
        $partido->hora = $request->time;
        $partido->puntos_equipo_local = $request->home_points;
        $partido->puntos_equipo_visitante = $request->visiting_points;
        $partido->estado_partido = $request->estado;
        $partido->id_equipo_local = $request->home_team;
        $partido->id_equipo_visitante = $request->visiting_team;

        //return $partido;
        
        $partido->save();*/

        $partido->update([
        "fecha" => $request->date,
        "hora" => $request->time,
        "puntos_equipo_local" => $request->home_points,
        "puntos_equipo_visitante" => $request->visiting_points,
        "estado_partido" => $request->estado,
        "id_local" => $request->home_team,
        "id_visitante" => $request->visiting_team
        ]);

        return redirect()->route('partidos.show', $partido); 
    }

    public function destroy(Partido $partido) {

        $partido->delete();

        return redirect()->route('partidos.index');

    }
}
