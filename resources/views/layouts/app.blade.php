<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-light d-flex flex-column mx-0">
            <div class="container-fluid d-flex justify-content-center py-4 bg-warning">
                <p class="h1 text-white" href="#">GIANT BOOK SUPPLIER</p>
            </div>
            <div class="container-fluid ">                
                <div class="collapse navbar-collapse d-flex flex-row justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                            </a>
                            <ul class="dropdown-menu">
                            @php
                                $navItems = app('App\Http\Controllers\NavbarController')->getNavItems();
                            @endphp
                            @foreach ($navItems as $data)
                                @include('navitems', ['some' => $data])
                            @endforeach
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('publisher') }}">Publisher</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('aboutus') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="container d-flex flex-row justify-content-center bg-primary">
        <p class="h3 text-white">Happy book store</p>
    </div>
</body>
</html>
