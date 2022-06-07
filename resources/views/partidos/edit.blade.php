@extends('layouts.plantilla')

@section('title', 'Partidos edit')

@section('content')

    <h1>"Aquí podrás editar un partido"</h1>  
    
    <form action="{{route('partidos.update', $partido)}}" method="POST">
        
        @csrf
        @method('put')

        <label>
            Fecha:
            <input type="date" name="date" required value="{{old('date', $partido->fecha)}}">   
        </label>

        @error('date')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Hora:
            <input type="time" name="time" min="09:00" max="18:00" required value="{{old('time', $partido->hora)}}">
        </label>

        @error('time')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Puntos Equipo Local:
            <input type="number" name="home_points" value="{{old('home_points', $partido->puntos_equipo_local)}}" >
        </label>

        @error('home_points')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Puntos Equipo Visitante:
            <input type="number" name="visiting_points" value="{{old('visiting_points', $partido->puntos_equipo_visitante)}}">
        </label>

        @error('visiting_points')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Estado:
            <input type="text" name="estado" value="{{old('estado', $partido->estado_partido)}}">
        </label>

        @error('estado')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Equipo Local:
            <input type="number" name="home_team" value="{{old('home_team', $partido->id_local)}}">
        </label>

        @error('home_team')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Equipo Visitante:
            <input type="number" name="visiting_team" value="{{old('visiting_team', $partido->id_visitante)}}">
        </label>

        @error('visiting_team')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <button type="submit">Actualizar formulario</button>
    </form>  
@endsection