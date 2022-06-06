@extends('layouts.plantilla')

@section('title', 'Equipos')

@section('content')

<h1>"EQUIPOS"</h1>
<a href="{{route('equipos.create')}}">Crear equipo</a>

<ul>
    @foreach ($equipos as $equipo)
    <li>
        <a href="{{route('equipos.show', $equipo->id)}}">{{$equipo->nombre}}</a>
    </li>
        
    @endforeach
</ul>

{{$equipos->links()}}

@endsection
    