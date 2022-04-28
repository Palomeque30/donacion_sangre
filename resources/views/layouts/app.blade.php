<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <marquee scrollamunt="20" direction="rigth" bgcolor="#9bd3ae" Height=30px> No te quedes sin ayudar, TU puedes salvar a muchas vidas... Teapa, Tabasco 2022 </marquee>
        
        <!-- css -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <link href="{{asset('css/estilos.css')}}" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">

         <!-- js -->
         <scripts src="{{asset('js/app.js')}}" defer></scripts>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <scripts src="https://code.jquery.com/jquery-3.5.1.js"></scripts>
        <scripts src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></scripts>
        <scripts src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></scripts>

        <title>@yield('titulo')</title>
    </head>
    <body>
         
        </style>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light shadow-sm"  style="background-color:#9bd3ae;">
            <img src="{{asset('storage/img/Logo_imss.png')}}" alt="" width="100" height="100"><img src="{{asset('storage/img/secretaria.png')}}" alt="" width="300" height="100"> 
                
                <div class="container">
    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                       <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))

                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>

                                @endif
    
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" type="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                   <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                            {{ __('Salir') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="border-bottom-0" padding="32px 16px">
                <main class="py-4">
                    @yield('content')
                </main>
            </section>
        </div>
    </body>
</html>