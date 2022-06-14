@extends('layouts.plantilla')

@section('title', 'Partidos edit')

@section('content')

<div class="container">
    <section class="partidos">
        <h2 class="text-4xl font-bold text-white pt-5 pb-5 text-center  bg-violet-700">Editar partido</h2>
    
        <div class="p-6 rounded-lg shadow-lg bg-white  w-full mt-5 center"> 
    
    <form action="{{route('partidos.update', $partido)}}" method="POST">
        
        @csrf
        @method('put')

        <div class="grid grid-cols-2 gap-x-8">
        <div>
        <label class="h2 text-md bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500 m-5">
            Fecha:
            <input class="w-full px-6 py-2 border-2 border-indigo-600 text-indigo-600 
            font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
            focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5"
             type="date" name="date" required value="{{old('date', $partido->fecha)}}">   
        </label>

        @error('date')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        </div>

        <div>
        <label class="h2 text-md bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500 m-5">
            Hora:
            <input class="w-full px-6 py-2 border-2 border-indigo-600 text-indigo-600 
            font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
            focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5"
             type="time" name="time" min="09:00" max="18:00" required value="{{old('time', $partido->hora)}}">
        </label>

        @error('time')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        </div>

        <div>
        <label class="h2 text-md bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500 m-5">
            Puntos Equipo Local:
            <input class="w-full px-6 py-2 border-2 border-indigo-600 text-indigo-600 
            font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
            focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5"
             type="number" min="0" max="150" name="home_points" value="{{old('home_points', $partido->puntos_equipo_local)}}" >
        </label>

        @error('home_points')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        </div>

        <div>
        <label class="h2 text-md bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500 m-5">
            Puntos Equipo Visitante:
            <input class="w-full px-6 py-2 border-2 border-indigo-600 text-indigo-600 
            font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
            focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5"
             type="number" min="0" max="150" name="visiting_points" value="{{old('visiting_points', $partido->puntos_equipo_visitante)}}">
        </label>

        @error('visiting_points')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        </div>

        <div class="col-span-2">
        <label class="h2 text-md bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500 m-5">
            Estado:
            <input class="w-full px-6 py-2 border-2 border-indigo-600 text-indigo-600 
            font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
            focus:outline-none focus:ring-0 transition duration-150 ease-in-out mt-5"
             type="text" name="estado" value="{{old('estado', $partido->estado_partido)}}">
        </label>
        <h1 class="text text-sm text-gray-500 italic mb-5">pendiente / jugado / suspendido</h1>

        @error('estado')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        </div>

        <div>
        <label class="h2 text-md bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500 m-5">
            Equipo Local:
            <input class="w-full px-6 py-2 border-2 border-indigo-600 text-indigo-600 
            font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
            focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5"
             type="number" name="home_team" value="{{old('home_team', $partido->id_local)}}">
        </label>

        @error('home_team')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        </div>

        <div>
        <label class="h2 text-md bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500 m-5">
            Equipo Visitante:
            <input class="w-full px-6 py-2 border-2 border-indigo-600 text-indigo-600 
            font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
            focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5"
             type="number" name="visiting_team" value="{{old('visiting_team', $partido->id_visitante)}}">
        </label>

        @error('visiting_team')
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
    <a href="{{route('partidos.index')}}">
        <button type="button" class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
        font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
        focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5">
            Volver a partidos
        </button>
    </a>
    </form>  
        </div>
    </section>
</div>
@endsection