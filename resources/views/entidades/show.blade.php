@extends('layouts.plantilla')
@section('title', 'Entidades show')
@section('content')

    <?php 
    if($player) {?>
            <h1>"Esta es la jugadora {{$player}}, del equipo {{$equipo}}, que pertenece a {{$entidad}}"</h1> ;
        <?php } elseif ($equipo) {?>
            <h1>"Este es el equipo {{$equipo}}, que pertenece a {{$entidad}}"</h1>;
       <?php } else {?>
            <h1>"ENTIDAD: {{$entidad}}"</h1>;
     <?php   };?>

    
@endsection



