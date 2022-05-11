
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,300;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            
                <div class="header" id="navbarSupportedContent">
                    <div class="header-container">

                    <div class="logo">
                        <img src="../img/logo.png" alt="Logo">
                        <h1 >Papertown Art</h1>
                    </div>
                    <div class="mobile" id="menu"  onclick="toggle()">
                        <div class="line1" ></div>
                        <div class="line2" ></div>
                        <div class="line3" ></div>
                    </div>

                    <div class="rotas" id="mobile-menu" >
                     
                         @guest
                        
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Cadastrar') }}</a>
                                </li>
                            @endif
                        
                         @else
                            <li class="nav-item dropdown">
                                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/home" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Ola, {{ Auth::user()->name }}! 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/home">Home</a>
                                    </li>
                                    <li>
                                        <a href="/teste">Canecas</a>
                                    </li>
                                <li>
                                        <a href="home#contato">Contato</a>
                                    </li>
                                 
                                <li>
                                    <a href="home#sobrenos">Sobre Nós</a>
                                    </li>
                                 <li> 
                                     <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                 onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                         {{ __('Sair') }}
                                                </a>
                                   
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                 @csrf
                                            </form>
                                        </div>
                                    </li>
                                    <li></li>
                        @endguest
                        </div>
                     </div>
                </div>
            </div>
        </nav>

                     <main class="py-4">
                        @yield('content')
                    </main>
    </div>
</body>
</html>
