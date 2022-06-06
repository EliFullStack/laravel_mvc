@extends('layouts.plantilla')

@section('title', 'Entidades')

@section('content')

<h1>"ESTAS SON LAS ENTIDADES"</h1>

<a href="{{route('home')}}">Volver a la home</a>

<ul>
    @foreach ($entidades as $entidad)
    <li>
        <a href="{{route('entidades.show', $entidad->id)}}">{{$entidad->nombre}}</a>
    </li>
        
    @endforeach
</ul>

{{$entidades->links()}}

@endsection

