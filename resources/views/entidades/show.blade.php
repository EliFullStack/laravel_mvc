@extends('layouts.plantilla')
@section('title', 'Entidades show')
@section('content')
<p>
    <?php 
    if($player) {
            echo "Esta es la jugadora $player, del equipo $equipo, que pertenece a $entidad";
        } elseif ($equipo) {
            echo "Este es el equipo $equipo, que pertenece a $entidad";
        } else {
            echo "ENTIDAD: $entidad";
        };
    ?>
    </p>
@endsection



