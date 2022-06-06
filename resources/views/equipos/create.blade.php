@extends('layouts.plantilla')

@section('title', 'Equipos create')

@section('content')

<h1>"Aquí podrás crear equipos"</h1>

<form action="{{route('equipos.store')}}" method="POST">
    @csrf
    <label>
        Nombre:
        <input type="text" name="name" value="{{old('name')}}">
    </label>
    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    <label>
        Entidad:
        <input type="number" name="id_entidad" value="{{old('id_entidad')}}">
    </label>
    @error('id_entidad')
    <br>
    <small>*{{$message}}</small>
    <br>
@enderror
    <br>
    <button type="submit">Enviar formulario</button>

</form>

@endsection
