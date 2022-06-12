@extends('layouts.plantilla')

@section('title', 'Equipos create')

@section('content')

<div class="container">
    <section class="equipos">
        <h2 class="text-4xl font-bold text-white pt-5 pb-5 text-center  bg-violet-700">Crear equipo</h2>
    
        <div class="p-6 rounded-lg shadow-lg bg-white  w-full mt-5 center">

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
        <select name="id_entidad">
            <option selected="">Selecciona una entidad</option>
            @foreach ($entidades as $entity)
                <option value="{{$entity->id}}">{{$entity->nombre}}</option>
            @endforeach
       
    </select>
    </label>
<!--    <input type="number" name="id_entidad" value="{{old('id_entidad')}}">
    @error('id_entidad')
    <br>
    <small>*{{$message}}</small>
    <br>
@enderror
    <br>-->
    <button type="submit" class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
        font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
        focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5">
            Enviar formulario
    </button>

</form>
        </div>
    </section>
</div>

@endsection
