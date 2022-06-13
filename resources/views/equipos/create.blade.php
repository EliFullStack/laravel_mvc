@extends('layouts.plantilla')

@section('title', 'Equipos create')

@section('content')

<div class="container">
    <section class="equipos">
        <h2 class="text-4xl font-bold text-white pt-5 pb-5 text-center  bg-violet-700">Crear equipo</h2>
    
        <div class="p-6 rounded-lg shadow-lg bg-white  w-full mt-5 center">

<form action="{{route('equipos.store')}}" method="POST">
    @csrf

    <div class="flex">
    <div class="mb-6 w-1/2 pr-5">
    <label>
        
        <input class="w-full px-6 py-2 border-2 border-indigo-600 text-indigo-600 
        font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
        focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5" placeholder="Nombre/Categoría del equipo"
        type="text" name="name" value="{{old('name')}}">
    </label>
    @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
    @enderror
    <br>
    </div>
    <div class="mb-6 w-1/2 pr-5">
    <label>
        <!--<select class="w-full px-6 py-2 border-2 border-indigo-600 text-indigo-600 
        font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
        focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5" 
        placeholder="Regular input" name="entity">
            <option selected="">Selecciona una entidad</option>
            @foreach ($entidades as $entity)
                <option name='id_entidad' value="{{$entity->id}}">{{$entity->nombre}}</option>
            @endforeach
        </select>  -->  
    <label>
        <input class="w-full px-6 py-2 border-2 border-indigo-600 text-indigo-600 
        font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
        focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5" 
        placeholder="Seleccione entidad (*)" type="number" min="1" max="4" name="id_entidad" 
        value="{{old('id_entidad')}}">
        <p class="text-gray-600 italic text-sm">(*) 1: Entidad 'A' / 2: Entidad 'B' / 3: Entidad 'C' / 4: Entidad 'D'</p>
    </label>        

    
    </label>
    @error('id_entidad')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

</div>
</div>
    <button type="submit" class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
        font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
        focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5">
            Enviar formulario
    </button>
    <a href="{{route('equipos.index')}}">
        <button type="button" class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
        font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
        focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5">
            VOLVER A EQUIPOS
        </button>
    </a>

</form>
        </div>
    </section>
</div>

@endsection
