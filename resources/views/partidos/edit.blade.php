@extends('layouts.plantilla')

@section('title', 'Partidos edit')

@section('content')

    <h1>"Aquí podrás editar un partido"</h1>  
    
    <form action="{{route('partidos.update', $partido)}}" method="POST">
        
        @csrf
        @method('put')

        <label>
            Fecha:
            <input type="date" name="date" required value="{{$partido->fecha}}">   
        </label>
        <br>
        <label>
            Hora:
            <input type="time" name="time" min="09:00" max="18:00" required value="{{$partido->hora}}">
        </label>
        <br>
        <label>
            Puntos Equipo Local:
            <input type="number" name="home_points" value="{{$partido->puntos_equipo_local}}" >
        </label>
        <br>
        <label>
            Puntos Equipo Visitante:
            <input type="number" name="visiting_points" value="{{$partido->puntos_equipo_visitante}}">
        </label>
        <br>
        <label>
            Estado:
            <select name="estado">
                <option value="jugado"{{$partido->puntos_equipo_visitante}}>Jugado</option>
                <option value="pendiente"{{$partido->puntos_equipo_visitante}}>Pendiente</option>
                <option value="suspendido"{{$partido->puntos_equipo_visitante}}>Suspendido</option>
            </select>
        </label>
        <br>
        <label>
            Equipo Local:
            <input type="number" name="home_team" value="{{$partido->id_equipo_local}}">
        </label>
        <br>
        <label>
            Equipo Visitante:
            <input type="number" name="visiting_team" value="{{$partido->id_equipo_visitante}}">
        </label>
        <br>
        <button type="submit">Actualizar formulario</button>
    </form>  
@endsection