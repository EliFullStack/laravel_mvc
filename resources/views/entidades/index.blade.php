@extends('layouts.plantilla')

@section('title', 'Entidades')

@section('content')

<div class="container bg-violet-700">
<section class="entidades">
    <h2 class="text-4xl font-semibold text-white pt-5 mb-5 text-center">Entidades</h2>

    <div class="flex justify-around">
        <div>
            <a href="#">
                <div class="a bg-cover mx-auto  border-2 border-white-500/50 rounded"></div>
            </a>            
            <h3 class="h2 text-2xl font-medium text-white pt-5 text-center pb-5">Entidad "A"</h3>            
        </div>
        <div>
            <a href="#">
            <div class="b bg-cover mx-auto border-2 border-white-500/50 rounded"></div>
            </a>
            <h3 class="h2 text-2xl font-medium text-white pt-5 text-center pb-5">Entidad "B"</h3>            
        </div>
        <div>
            <a href="#">
            <div class="c bg-cover mx-auto border-2 border-white-500/50 rounded"></div>
            </a>
            <h3 class="h2 text-2xl font-medium text-white pt-5 text-center pb-5">Entidad "C"</h3>            
        </div>
        <div>
            <a href="#">
            <div class="d bg-cover mx-auto border-2 border-white-500/50 rounded"></div>
            </a>
            <h3 class="h2 text-2xl font-medium text-white pt-5 text-center pb-5">Entidad "D"</h3>            
        </div>
    </div>               
            <!--    <ul>
                    @foreach ($entidades as $entidad)                    
                    <a class="shadow-2xl text-2xl text-semibold italic px-10"
                    href="{{route('entidades.show', $entidad->id)}}">{{$entidad->nombre}}</a>           
                    
                    @endforeach
                </ul>
            -->

</section>

{{$entidades->links()}}
</div>
@endsection

