@extends('layouts.plantilla')
@section('title', 'Equipo '. $equipo->nombre)
@section('content')
<h1>EQUIPO: {{$equipo->nombre}}</h1>

<a href="{{route('equipos.index')}}">Volver a equipos</a>

<p>País de origen: {{$equipo->id_entidad}}</p>
@endsection

