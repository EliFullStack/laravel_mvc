<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEquipo;

class EquipoController extends Controller
{
    public function index() {

        $equipos = Equipo::orderBy('id', 'desc')->paginate();
        
        return view('equipos.index', compact('equipos'));
    }

    public function create() {
        return view('equipos.create');
    }

    public function store(StoreEquipo $request) {

        $equipo = new Equipo();
        $equipo->nombre = $request->name;
        $equipo->id_entidad = $request->id_entidad;
        //return $equipo;
        $equipo->save();
        return redirect()->route('equipos.show', $equipo);
    }

    public function show(Equipo $equipo) {

        
        //return $equipo;
        return view('equipos.show', compact('equipo'));
    }

    public function edit(Equipo $equipo) {
        //otra manera de obtener lo mismo: public function edit($id)
        //$equipo = Equipo::find($id); 
        //return $equipo;
        return view('equipos.edit', compact('equipo'));
    }

    public function update(Request $request, Equipo $equipo) {

        $request->validate([
            'name' => 'required|max:15',
            'id_entidad' => 'required'
        ]);

        //return $request->all();
        $equipo->nombre = $request->name;
        $equipo->id_entidad = $request->id_entidad;
        //return $equipo;
        $equipo->save();
        return redirect()->route('equipos.show', $equipo);
    }

}
