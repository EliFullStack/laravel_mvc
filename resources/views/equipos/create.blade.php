@extends('layouts.plantilla')

@section('title', 'Equipos create')

@section('content')

<h1>"Aquí podrás crear equipos"</h1>

<form action="{{route('equipos.store')}}" method="POST">
    @csrf
    <label>
        Nombre:
        <input type="text" name="name">
    </label>
    <br>
    <label>
        Entidad:
        <input type="number" name="id_entidad">
    </label>
    <br>
    <button type="submit">Enviar formulario</button>

</form>

@endsection
