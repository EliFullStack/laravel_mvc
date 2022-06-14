@extends('layouts.plantilla')
@section('title', 'Equipo '. $equipo->nombre)
@section('content')

<div class="container">
<div class="text-center pt-8 font-extrabold ...">
<h1 class="h2 text-5xl bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500 m-5">EQUIPO: {{$equipo->nombre}}</h1>
<h1 class="h2 text-3xl bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500 m-5">ENTIDAD:

    
    @if ($equipo->id_entidad == 1)
    'A'
    @elseif ($equipo->id_entidad == 2)
    'B'
    @elseif ($equipo->id_entidad == 3)
    'C'
    @else
    'D'
    @endif


    <!--{{$equipo->id_entidad}} -->
</h1>
    
</div>

<a href="{{route('equipos.index')}}">
    <button type="button" class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
    font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
    focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5">
        VOLVER A EQUIPOS
    </button>
</a>

<a href="{{route('equipos.edit', $equipo)}}">
    <button type="button" class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
    font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
    focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5">
        Editar equipo
    </button>
</a>

<form action="{{route('equipos.destroy', $equipo)}}" method="POST">

    @csrf
    @method('delete')

    <button type="subnit" class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
    font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
    focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5">
        Eliminar equipo
    </button>
</form>
</div>

@endsection

