@extends('layouts.plantilla')

@section('title', 'Equipos edit')

@section('content')

<h1>"Aquí podrás editar un equipo"</h1>

<form action="{{route('equipos.update', $equipo)}}" method="POST">
    @csrf
    @method('put')
    <label>
        Nombre:
        <input type="text" name="name" value="{{$equipo->nombre}}">
    </label>
    <br>
    <label>
        Entidad:
        <input type="number" name="id_entidad" value="{{$equipo->id_entidad}}">
    </label>
    <br>
    <button type="submit">Actualizar formulario</button>

</form>

@endsection