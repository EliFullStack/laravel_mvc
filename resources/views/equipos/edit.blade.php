@extends('layouts.plantilla')

@section('title', 'Equipos edit')

@section('content')

<div class="container">
<section class="equipos">
    <h2 class="text-4xl font-bold text-white pt-5 pb-5 text-center  bg-violet-700">Editar equipo</h2>

    <div class="p-6 rounded-lg shadow-lg bg-white  w-full mt-5 center">

    <form class="flex flex-row" action="{{route('equipos.update', $equipo)}}" method="POST">

     @csrf
     @method('put')

    <div class="mb-6 w-1/2 pr-5">
        <label>          
        <input class="w-full px-6 py-2 border-2 border-indigo-600 text-indigo-600 
        font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
        focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5" 
        type="text" name="name" value="{{old('name', $equipo->nombre)}}">
        </label>
        @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>
         @enderror
    </div>

    <div class="text-gray-700 w-1/2 pl-5 h2 px-6 mb-6 w-1/2 pr-5">
      <!--  <select class="w-full px-6 py-2 border-2 border-indigo-600 text-indigo-600 
        font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
        focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5" 
        placeholder="Regular input">
          <option>A regular sized select input</option>
          <option>Another option</option>
          <option>And one more</option>
        </select>-->

        <label>
            <input class="w-full px-6 py-2 border-2 border-indigo-600 text-indigo-600 
            font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
            focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5" 
            placeholder= "Seleccione una entidad(*)" type="number" name="id_entidad" value="{{old('id_entidad', $equipo->id_entidad)}}">
            <div class="flex flex-row">
            <p class="h2 mr-5 text-base bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500"> Entidad:
            @if ($equipo->id_entidad == 1)
           'A'
            @elseif ($equipo->id_entidad == 2)
           'B'
            @elseif ($equipo->id_entidad == 3)
           'C'
           @else
           'D'
           @endif
         </p>

         <p class="text-gray-600 italic text-base ml-5"> 1: Entidad 'A' / 2: Entidad 'B' / 3: Entidad 'C' / 4: Entidad 'D'</p>
        </div>
        </label>
    
        @error('id_entidad')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
        </div>
      </div>
   

    <div>
    

        <button type="submit" class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
        font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
        focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5">
            Actualizar formulario
        </button>
   
   

<a href="{{route('equipos.index')}}">
    <button type="button" class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
    font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
    focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5">
        VOLVER A EQUIPOS
    </button>
</a>
</form>
</section>

</div>
</div>

@endsection