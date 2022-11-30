<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/home/home.css') }}">
    <title>Home - Autool</title>
</head>
<body>
    {{-- <a class="link" href="{{ url('/login') }}">Login</a> --}}
    <header class="header">
        <nav class="header__nav">
            <div class="header__nav__box">
                <a href="{{url('/')}}" class="header__nav__box--logo">Autool</a>
                @guest
                    <a href="{{ url('/login') }}" class="header__nav__box--login">Login</a>
                @endguest
                @auth
                    <span>Welcome, {{ auth()->user()->name }}!</span>
                    <form action="POST" action="/logout">
                        <button type="submit">Logout</button>
                    </form>
                @endauth
            </div>
        </nav>
    </header>
    <main></main>
</body>
</html>