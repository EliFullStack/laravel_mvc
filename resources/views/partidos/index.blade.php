@extends('layouts.plantilla')

@section('title', 'Partidos')

@section('content')

    <h1>"PARTIDOS"</h1>   
    <a href="{{route('partidos.create')}}">Crear partido</a>

    <ul>
        @foreach ($partidos as $partido)
        <li>
            <a href="{{route('partidos.show', $partido->id)}}">{{$partido->fecha}}</a>
        </li>
            
        @endforeach
    </ul>
    
    {{$partidos->links()}}

@endsection
