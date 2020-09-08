<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Seneng Maca</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="{{url('frontend/libraries/bootstrap/css/bootstrap.css')}}">
    
    <link rel="stylesheet" href="{{url('frontend/styles/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/libraries/bootstrap/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('frontend/libraries/bootstrap/css/bootstrap.min.css')}}">
    <style>
    .dropdown-menu-right{
        background-color:#071c4d;
    }
    .dropdown-item{
        color:#fff;
    }
    .navbar-light .navbar-nav .nav-link{
        color:#fff;
    }
  
    </style>
</head>
<body>
    
    <div id="app">
           
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Seneng Maca
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('/anggota')}}">Gallery</a>
                            <a class="dropdown-item" href="{{url('/buku')}}">Materi</a>
                        </div>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    @yield('carousel')
    </div>

        <main class="py-4" style="margin-top:50px;">
            @yield('content')
        
        </main>
   
   
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
  
</body>
</html>
