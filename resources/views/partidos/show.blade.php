@extends('layouts.plantilla')

@section('title', 'Partido '. $partido->fecha)

@section('content')

    <h1>"PARTIDO: {{$partido->fecha}}"</h1>   
    
    <a href="{{route('partidos.index')}}">Volver a partidos</a>
    <br>

    <a href="{{route('partidos.edit', $partido)}}">Editar partido</a>

    <p>Fecha: {{$partido->fecha}}</p>
    <p>Hora: {{$partido->hora}}</p>
    <p>Estado: {{$partido->estado_partido}}</p>
    <p>Equipo Local {{$partido->id_local}}</p>
    <p>Equipo Visitante: {{$partido->id_visitante}}</p>
    <p>Puntos equipo local: {{$partido->puntos_equipo_local}}</p>
    <p>Puntos equipo visitante: {{$partido->puntos_equipo_visitante}}</p>


    <br>
    <form action="{{route('partidos.destroy', $partido)}}" method="POST">

        @csrf
        @method('delete')

        <button type="submit">Eliminar</button>

    </form>

@endsection
