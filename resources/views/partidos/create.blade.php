@extends('layouts.plantilla')

@section('title', 'Partidos create')

@section('content')

    <h1>"Aquí podrás crear partidos"</h1>  
    
    <form action="{{route('partidos.store')}}" method="POST">
        @csrf
        <label>
            Fecha:
            <input type="date" name="date" value="{{old('date')}}">   
        </label>

        @error('date')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Hora:
            <input type="time" name="time" min="09:00" max="18:00" value="{{old('time')}}">
        </label>

        @error('time')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Puntos Equipo Local:
            <input type="number" name="home_points" value="{{old('home_points')}}">
        </label>

        <br>
        <label>
            Puntos Equipo Visitante:
            <input type="number" name="visiting_points" value="{{old('visiting_points')}}">
        </label>

        <br>
        <label>
            Estado:
            <input type="text" name="estado" value="{{old('estado')}}">
        </label>

        @error('estado')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror
        
        <br>
        <label>
            Equipo Local:
            <input type="number" name="home_team" value="{{old('home_team')}}">
        </label>

        @error('home_team')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <label>
            Equipo Visitante:
            <input type="number" name="visiting_team" value="{{old('visiting_team')}}">
        </label>

        @error('visiting_team')
        <br>
        <small>*{{$message}}</small>
        <br>
        @enderror

        <br>
        <button type="submit">Enviar formulario</button>
    </form>  
@endsection
