@extends('layouts.plantilla')

@section('title', 'Equipos edit')

@section('content')

<h1>"Aquí podrás editar un equipo"</h1>

<form action="{{route('equipos.update', $equipo)}}" method="POST">
    @csrf
    @method('put')
    <label>
        Nombre:
        <input type="text" name="name" value="{{old('name', $equipo->nombre)}}">
    </label>
    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <label>
        Entidad:
        <input type="number" name="id_entidad" value="{{old('id_entidad', $equipo->id_entidad)}}">
    </label>
    @error('id_entidad')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <button type="submit">Actualizar formulario</button>

</form>

@endsection