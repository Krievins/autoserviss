@extends('layouts.main', [
    'stylesheet' => mix('css/home/home.css')
])

@section('content')
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
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @endauth
            </div>
        </nav>
    </header>
@endsection
    