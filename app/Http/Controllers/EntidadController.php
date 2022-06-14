<?php

namespace App\Http\Controllers;

use App\Models\Entidad;
use Illuminate\Http\Request;

class EntidadController extends Controller
{
    public function index() {

        $entidades = Entidad::paginate();
        //return $entidades;
        

        return view('entidades.index', compact('entidades'));
    }

    public function show(Entidad $entidad) {

       // $entidad = Entidad::find($id);
        //return $entidad;
       // return view('entidades.show', ['entidad' => $id, 'equipo' => $equipo, 'player' =>$player]);
       //return view('entidades.show', compact('entidad'), compact('equipo'), compact('player'));
       return view('entidades.show', compact('entidad'));
    }

    
}
