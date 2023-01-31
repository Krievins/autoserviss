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
    <main>
        <div class="admin">
            {{-- Dashboard --}}
            <div class='admin__dashboard'>
                {{-- Statistics --}}
                <h1 class='admin__dashboard--heading'>Admin Panelis</h1>
                <a class='admin__dashboard--mainlink' href="{{ url('admin') }}"><i class="icon fa fa-pie-chart"></i>Pārskats</a>
                {{-- Users --}}
                <h1 class='admin__dashboard--main'><i class="icon fa fa-user"></i>Lietotāji</h1>
                <a class='admin__dashboard--link' href="{{ url('admin/users') }}">- Lietotāji</a>
                <a class='admin__dashboard--link' href="{{ url('admin/create_user') }}">- Izveidot Lietotāju</a>
                {{-- Cars --}}
                <h1 class='admin__dashboard--main'><i class="icon fa fa-car"></i>Mašīnas</h1>
                <a class='admin__dashboard--link' href="{{ url('admin/cars') }}">- Mašīnas</a>
                <a class='admin__dashboard--link' href="{{ url('admin/create_car') }}">- Izveidot Mašīnu</a>
                {{-- Categories --}}
                <h1 class='admin__dashboard--main'><i class="icon fa fa-list"></i></i>Profesijas</h1>
                <a class='admin__dashboard--link' href="{{ url('admin/category') }}">- Amati</a>
                <a class='admin__dashboard--link' href="{{ url('admin/create_category') }}">-  Izveidot Amatu</a>
                @auth
                    <p class="admin__dashboard--user">Welcome, {{ auth()->user()->name }}!</p>
                    <a class='admin__dashboard--logout' href="{{ url('/logout') }}">Logout</a>  
                @endauth
            </div>
            <div class='admin__content'>
                {{-- Navigation Bar --}}
                @if (isset($pagename))
                    <nav class="admin__content__nav">
                        <div class="admin__content__nav__box">
                            <h1 class="admin__content__nav__box--name" >{{ $pagename }}</h1>
                        </div>
                    </nav>
                @endif
                {{-- Content layouts --}}
                @yield('content')
            </div>
        </div>
    </main>
</body>
</html>