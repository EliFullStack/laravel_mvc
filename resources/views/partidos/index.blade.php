@extends('layouts.plantilla')

@section('title', 'Partidos')

@section('content')

<div class="container">
    <section class="Partidos">
        <h2 class="text-4xl font-bold text-white pt-5 pb-5 text-center  bg-violet-700">Partidos</h2>
        <a href="{{route('partidos.create')}}">
            <button type="button" class="w-full inline-block px-6 py-2 border-2 border-indigo-600 text-indigo-600 
            font-medium text-xs leading-normal uppercase rounded hover:bg-black hover:bg-opacity-5 
            focus:outline-none focus:ring-0 transition duration-150 ease-in-out mb-5 mt-5">
                Crear partido
            </button>
        </a>
    
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
                          Fecha
                        </th>
                        <th scope="col" class="text-sm font-semibold text-gray-900 px-6 py-4">
                          Hora
                        </th>
                        <th scope="col" class="text-sm font-semibold text-gray-900 px-6 py-4">
                            Puntos
                            <br>
                            equipo local
                        </th>
                        <th scope="col" class="text-sm font-semibold text-gray-900 px-6 py-4">
                            Puntos
                            <br>
                            equipo visitante
                        </th>
                        <th scope="col" class="text-sm font-semibold text-gray-900 px-6 py-4">
                           Estado
                           <br>
                           partido
                        </th>
                        <th scope="col" class="text-sm font-semibold text-gray-900 px-6 py-4">
                            Equipo
                            <br>
                            local
                         </th>
                         <th scope="col" class="text-sm font-semibold text-gray-900 px-6 py-4">
                            Equipo
                            <br>
                            visitante
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

                    @foreach ($consultas as $c)
                                                    
                      <tr class="bg-white border-b">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$c->id_partidos}}</td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$c->fecha}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$c ->hora}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$c ->puntoslocal}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$c ->puntosvisitante}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$c ->estado}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$c ->nombre}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$c ->nombre}}
                        </td>

                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a href="{{route('partidos.show', $c->id_partidos)}}">
                            <button type="button" class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs 
                            leading-tight uppercase rounded-full shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 
                            focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition 
                            duration-150 ease-in-out">Ver</button>  
                            </a>
                        </td>

                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            <a href="{{route('partidos.edit', $c->id_partidos)}}">
                            <button type="button" class="inline-block px-6 py-2.5 bg-yellow-500 text-white font-medium text-xs leading-tight 
                            uppercase rounded-full shadow-md hover:bg-yellow-600 hover:shadow-lg focus:bg-yellow-600 focus:shadow-lg 
                            focus:outline-none focus:ring-0 active:bg-yellow-700 active:shadow-lg transition duration-150 ease-in-out">Modificar</button>  
                            </a>
                        </td>
                        <!--
                        
                      -->
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
    
    {{$partidos->links()}}
    
@endsection
