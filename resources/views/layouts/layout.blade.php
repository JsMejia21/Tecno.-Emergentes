<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>RIDEL - Página principal</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- CSS List -->
	<link rel="stylesheet" href="css/list.css">
</head>
<body>
    <div id="app">
    <nav class="dropdownmenu">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ms-auto" >
                            <!-- Authentication Links -->
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="font-size: 1em; font-weight: bold">RIDEL.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/product.html">Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">¿Quiénes somos?</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/product.html">Contáctanos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Sobre nosotros</a>
                                </li>
                                <li class="nav-item dropdown" style="float:right">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="menu-arrow">&#9660;</span></a>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();" style="color: gray">
                                            {{ __('Logout') }}
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
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>


