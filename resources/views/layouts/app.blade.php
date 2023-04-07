<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>วิสาหกิจชุม กลุ่มเกษตรกรพัฒนาแปรรูปสตรอเบอรี่ บ้านแม่ยางห้า</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css” />


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add to cart</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
@yield('style')
<style>
    body {
        background-color: #FFDEDE;
    }
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm" data-spy="affix" data-offset-top="197" style="background-color: #ffffff;">
            <div class="container">

                {{-- <div id="app">
                        <nav class="navbar navbar-expand-md navbar-light fixed-top shadow-sm" data-spy="affix" data-offset-top="197" style="background-color: #ffffff;">
                            <div class="container"> --}}


                <a class="navbar-brand" href="{{ url('/') }}">
                    Home
                </a>

                <img src="https://cdn.discordapp.com/attachments/799538881258979358/1055414370076729384/Red_Retro_Doodle_Strawberry_Original_Fruit_Logo_1_2.png"></a>




                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        {{-- <button type="button" class="btn btn">
                                    <i class="bi bi-cart3" style="font-size: 20px; color: #865846;"></i>
                                </button> --}}



                        {{-- @if (Route::has('cart'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('cart') }}"> <i class="bi bi-cart3" style="font-size: 20px; color: #865846;"></i> </a>
                        </li>
                        @endif --}}
{{--
                        <a href="{{ route('cart.list') }}" class="flex items-center">
                            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" style="font-size: 20px; color: #865846;">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                            {{ Cart::getTotalQuantity() }}
                        </a> --}}



                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"> <i class="bi bi-person-circle " style="font-size: 20px; color: #865846;"></i> </a>
                        </li>
                        @endif

                        {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif --}}
                        @else
                        {{-- <a href="{{ route('cart.list') }}" class="flex items-center">
                            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" style="font-size: 20px; color: #865846;">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg> --}}
                            {{ Cart::getTotalQuantity() }}
                        </a>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script>
        @yield('scripts')
    </script>

</body>

</html>
