<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('img/favicon.ico')}}">

    <style>
        .imagen{
            background-image: url("{{asset('img/pexels-joel-de-leon-934083.jpg')}}");
            height: 450px;
            width: 1000px;
            margin-left: auto;
            margin-right: auto;   
        }

        .logo{
            background-image: url("{{asset('img/basketball-307654_640.png')}}");
            height: 70px;
            width: 70px;
            margin-left: auto;
            margin-right: auto;  
        }

        .a{
            background-image: url("{{asset('img/pexels-markus-spiske-3001822.jpg')}}");
            height: 270px;
            width: 210px;
            margin-left: auto;
            margin-right: auto;  
        }

        .b{
            background-image: url("{{asset('img/pexels-ricardo-esquivel-2061197.jpg')}}");
            height: 270px;
            width: 210px;
            margin-left: auto;
            margin-right: auto;  
        }

        .c{
            background-image: url("{{asset('img/pexels-cottonbro-5275667.jpg')}}");
            height: 270px;
            width: 210px;
            margin-left: auto;
            margin-right: auto;  
        }

        .d{
            background-image: url("{{asset('img/pexels-pixabay-358042.jpg')}}");
            height: 270px;
            width: 210px;
            margin-left: auto;
            margin-right: auto;  
        }
        .h1{
          font-family: 'Montserrat';
        }

        .h2{
          font-family: 'Source Code Pro';
        }
        
    </style>
    <script>
        tailwind.config = {
          theme: {
            container: {
                 center: true,
                 

           // font-family: {
           //   'mont': ['Montserrat'],
           //   'code': ['Source Code Pro'],
           // },
              
            
            extend: {
              colors: {
                'regal-blue': '#243c5a',
              }
            }
          }
        }
    }
      </script>
</head>
<body>

  <div class="container">
    <nav class="bg-violet-700">
      <div class="h-32 place-content-center bg-gradient-to-r from-indigo-600 via-slate-200 to-pink-500 ">
    <div class="text-5xl  text-center pt-8 font-extrabold ...">
      <a class="justify-self-end" href="{{route('home')}}">
      <span class="h2 bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
        Liga de basketball femenino
      </span>
    </a>
    </div>
      </div>
    </nav> 
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4  bg-violet-900 h-10">
        <div class="text-white uppercase hover:bg-violet-700 justify-self-center">
            <a href="{{route('home')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
            </a>
            
        </div>
        <a class="h2 pt-1 font-medium tracking-wide text-xl text-white uppercase bold text-center hover:bg-violet-700 cursor-pointer" href="{{route('entidades.index')}}">Entidades</a>
        <a class="h2 pt-1 font-medium tracking-wide text-xl text-white uppercase bold text-center hover:bg-violet-700 cursor-pointer" href="{{route('equipos.index')}}">Equipos</a>
        <a class="h2 pt-1 font-medium tracking-wide text-xl text-white uppercase bold text-center hover:bg-violet-700 cursor-pointer" href="{{route('partidos.index')}}">Partidos</a>
    </div>
    </nav>
    
</div>


  <main>
    @yield('content')
  </main>
  
  <footer class="h2 bg-indigo-900 text-center lg:text-left md:container md:mx-auto">
    <div class="text-white text-center p-4">
      © 2022 Copyright: Created by Elita
    </div>
  </footer>
</body>
</html>