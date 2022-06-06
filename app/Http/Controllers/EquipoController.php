<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEquipo;
use App\Http\Requests\UpdateEquipo;

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

       /* $equipo = new Equipo();
        $equipo->nombre = $request->name;
        $equipo->id_entidad = $request->id_entidad;
        //return $equipo;
        $equipo->save();*/
 
        $equipo = Equipo::create([
            "nombre" => $request->name,
            "id_entidad" => $request->id_entidad
        ]);

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

    public function update(UpdateEquipo $request, Equipo $equipo) {

        //return $request->all();
     /*   $equipo->nombre = $request->name;
        $equipo->id_entidad = $request->id_entidad;
        //return $equipo;
        $equipo->save();*/

        $equipo->update([
            "nombre" => $request->name,
            "id_entidad" => $request->id_entidad
        ]);

       // $equipo->update($request->all()); 

        return redirect()->route('equipos.show', $equipo);
    }

    public function destroy(Equipo $equipo) {

        $equipo->delete();

        return redirect()->route('equipos.index');

    }

}
