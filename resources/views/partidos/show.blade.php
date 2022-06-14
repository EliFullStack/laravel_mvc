@extends('layouts.plantilla')

@section('title', 'Partido '. $partido->fecha)

@section('content')

<div class="container">
    <div class="text-center pt-8 font-extrabold ...">

    <h1 class="h2 text-4xl bg-clip-text text-transparent bg-gradient-to-r 
    from-pink-500 to-violet-500 m-5">Fecha: "{{$partido->fecha}}"</h1>
    <h2 class="h2 text-3xl bg-clip-text text-transparent bg-gradient-to-r 
    from-pink-500 to-violet-500 m-5">Hora: {{$partido->hora}}</h2>
    <h2 class="h2 text-3xl bg-clip-text text-transparent bg-gradient-to-r 
    from-pink-500 to-violet-500 m-5">Estado del partido: {{$partido->estado_partido}}</h2>      
    </div>

    <div class="grid grid-cols-2 justify-items-center">
    <p class="h2 text-2xl bg-clip-text text-transparent bg-gradient-to-r 
    from-pink-500 to-violet-500 m-5">Equipo Local: {{$partido->id_local}}</p>
    <p class="h2 text-2xl bg-clip-text text-transparent bg-gradient-to-r 
    from-pink-500 to-violet-500 m-5">Equipo Visitante: {{$partido->id_visitante}}</p>
    <p class="h2 text-2xl bg-clip-text text-transparent bg-gradient-to-r 
    from-pink-500 to-violet-500 m-5">Puntos equipo local: {{$partido->puntos_equipo_local}}</p>
    <p class="h2 text-2xl bg-clip-text text-transparent bg-gradient-to-r 
    from-pink-500 to-violet-500 m-5">Puntos equipo visitante: {{$partido->puntos_equipo_visitante}}</p>
    </div>

    <a href="{{route('partidos.index')}}">
        <button type="button" class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
        font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
        focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5">
            Volver a partidos
        </button>
    </a>
    
    <a href="{{route('partidos.edit', $partido)}}">
        <button type="button" class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
        font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
        focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5">
            Editar equipo
        </button>
    </a>

    <form action="{{route('partidos.destroy', $partido)}}" method="POST">

        @csrf
        @method('delete')

        <button class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
        font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
        focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5"
         type="submit">Eliminar</button>

    </form>

</div>

@endsection
