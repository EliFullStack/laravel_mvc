@extends('layouts.plantilla')

@section('title', 'Partido '. $partido->fecha)

@section('content')

    <h1>"PARTIDO: {{$partido->fecha}}"</h1>   
    
    <a href="{{route('partidos.index')}}">Volver a partidos</a>
    <br>

    <a href="{{route('partidos.edit', $partido)}}">Editar partido</a>

    <p>Hora: {{$partido->hora}}</p>

@endsection
