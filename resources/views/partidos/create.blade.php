@extends('layouts.plantilla')

@section('title', 'Partidos create')

@section('content')

    <h1>"Aquí podrás crear partidos"</h1>  
    
    <form action="{{route('partidos.store')}}" method="POST">
        @csrf
        <label>
            Fecha:
            <input type="date" name="date" required>   
        </label>
        <br>
        <label>
            Hora:
            <input type="time" name="time" min="09:00" max="18:00" required>
        </label>
        <br>
        <label>
            Puntos Equipo Local:
            <input type="number" name="home_points">
        </label>
        <br>
        <label>
            Puntos Equipo Visitante:
            <input type="number" name="visiting_points">
        </label>
        <br>
        <label>
            Estado:
            <select name="estado">
                <option value="jugado">Jugado</option>
                <option value="pendiente">Pendiente</option>
                <option value="suspendido">Suspendido</option>
              </select>
        </label>
        <br>
        <label>
            Equipo Local:
            <input type="number" name="home_team">
        </label>
        <br>
        <label>
            Equipo Visitante:
            <input type="number" name="visiting_team">
        </label>
        <br>
        <button type="submit">Enviar formulario</button>
    </form>  
@endsection
