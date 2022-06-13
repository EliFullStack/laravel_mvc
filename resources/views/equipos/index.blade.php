@extends('layouts.plantilla')

@section('title', 'Equipos')

@section('content')

    
<div class="container">
    <section class="equipos">
        <h2 class="text-4xl font-bold text-white pt-5 pb-5 text-center  bg-violet-700">Equipos</h2>
        <a href="{{route('equipos.create')}}">
            <button type="button" class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
            font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
            focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5">
                Crear equipos
            </button>
        </a>
    
    <!--    <ul>
            @foreach ($equipos as $equipo)
            <li>
                <a href="{{route('equipos.show', $equipo->id)}}">{{$equipo->nombre}}</a>
                @foreach ($entidades as $entidad)
            <li>
               <p>{{$entidad->nombre}}</p>                                
           </li>              
            @endforeach
                                
           </li>              
            @endforeach
        </ul>-->


        <div class="flex flex-col mb-10">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <table class="min-w-full text-center">
                    <thead class="border-b bg-gray-50">
                      <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                          #
                        </th>
                        <th scope="col" class="text-sm font-semibold text-gray-900 px-6 py-4">
                          Categoría
                        </th>
                        <th scope="col" class="text-sm font-semibold text-gray-900 px-6 py-4">
                          Entidad
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                          
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                          
                        </th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                          
                        </th>
                      </tr>
                    </thead class="border-b">
                    <tbody>
                        
                    @foreach ($entidades as $e)
                                                    
                      <tr class="bg-white border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$e->id_equipos}}</td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$e->equipo}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$e->nombre_entidad}}
                        </td>

                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a href="{{route('equipos.show', $e->id_equipos)}}">
                            <button type="button" class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs 
                            leading-tight uppercase rounded-full shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 
                            focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition 
                            duration-150 ease-in-out">Ver</button>  
                            </a>
                        </td>

                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a href="{{route('equipos.edit', $e->id_equipos)}}">
                            <button type="button" class="inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight 
                            uppercase rounded-full shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg 
                            focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out">Modificar</button>  
                            </a>
                        </td>
                        
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <form action="{{route('equipos.destroy', $equipo)}}" method="POST">

                                @csrf
                                @method('delete')

                                
                                <button type="submit" class="inline-block px-6 py-2.5 bg-red-500 text-white font-medium text-xs leading-tight 
                                uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg 
                                focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Eliminar</button>
                                   
                            </form>    
                        </td>
                      </tr>
                      

                    @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

    </section>    
</div>        
        
 
       

        {{$equipos->links()}}
        
    
    


@endsection
    