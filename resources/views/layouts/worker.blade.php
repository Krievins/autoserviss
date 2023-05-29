<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/dashboard.css') }}">
    @if (isset($stylesheet))
        <link href="{{ $stylesheet }}" rel="stylesheet"/>
    @endif
    @if (isset($title))
        <title>{{ $title }}</title>
    @endif

    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    <div class="admin">
        {{-- Dashboard --}}
        <div class='admin__dashboard'>
            {{-- Statistics --}}
            <h1 class='admin__dashboard--heading'>Admin Panelis</h1>
            <div class="admin__dashboard__nav">
                <a class='admin__dashboard__nav--mainlink' href="{{ url('admin') }}"><i class="icon fa fa-pie-chart admin__dashboard__nav--mainlink-icon"></i>Pārskats</a>
                {{-- Users --}}
                <a href="{{ url('admin/users') }}" class='admin__dashboard__nav--main'><i class="icon fa fa-user admin__dashboard__nav--main-icon"></i>Mašīnu Saraksts</a>
                {{-- Cars --}}
                <a href="{{ url('admin/cars') }}" class='admin__dashboard__nav--main'><i class="icon fa fa-car admin__dashboard__nav--main-icon"></i>Pieņemtās Mašīnas</a>
            </div>
        </div>
        <div class='admin__content'>
            {{-- Navigation Bar --}}
            @if (isset($pagename))
                <nav class="admin__content__nav">
                    <div class="admin__content__nav__box">
                        <h1 class="admin__content__nav__box--name" >{{ $pagename }}</h1>
                        <div class="admin__content__nav__box__auth">
                            @auth
                                <p class="admin__content__nav__box__auth--user">Welcome, {{ auth()->user()->name }}!</p>
                                <a class='admin__content__nav__box__auth--logout' href="{{ url('/logout') }}">(Logout)</a>  
                            @endauth
                        </div>
                        
                    </div>
                </nav>
            @endif
            {{-- Content layouts --}}
            <div class="admin__content__box">
                @yield('content')
            </div>
            
        </div>
    </div>
</body>
</html>