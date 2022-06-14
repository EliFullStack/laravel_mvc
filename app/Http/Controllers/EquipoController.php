<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Entidad;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEquipo;
use App\Http\Requests\UpdateEquipo;

class EquipoController extends Controller
{
    public function index() {

        $equipos = Equipo::orderBy('id', 'asc')->paginate();

        $entidades = Equipo::join('entidades', 'id_entidad', '=','entidades.id' )
        ->select ('equipos.id as id_equipos', 'equipos.nombre as equipo', 'entidades.nombre as nombre_entidad')
        ->orderBy('id_equipos', 'asc')
        ->get();
        //return $entidades;

        //$entidades = Entidad::all();
    
        return view('equipos.index', compact('equipos', 'entidades'))
        ->with('entidades', $entidades);
    }

    public function create() {
        $entidades = Entidad::all();
       // return $entidades;
      /* $entidades = Equipo::join('entidades', 'id_entidad', '=','entidades.id' )
       ->select ('equipos.id as id_equipos', 'equipos.nombre as equipo', 'entidades.nombre as nombre_entidad')
       ->orderBy('id_equipos', 'asc')
       ->get();*/

      /* $entidades = Equipo::addSelect(['id_entidad' => Entidad::select('nombre')
       ->whereColumn('id_entidad', 'entidades.id')
       ])
       ->get();*/

       //return $entidades;
       
       return view('equipos.create')
       ->with('entidades', $entidades);
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
