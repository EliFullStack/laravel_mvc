@extends('layouts.plantilla')

@section('title', 'Entidades '. $entidad->nombre)

@section('content')

    
    <h1>"ENTIDAD: {{$entidad->nombre}}"</h1>
    <a href="{{route('entidades.index')}}">Volver a entidades</a>
    <p><strong>País de origen: {{$entidad->pais_origen}}</strong></p>
    
@endsection



