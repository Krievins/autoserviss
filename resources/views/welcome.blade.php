@extends('layouts.main', [
    'stylesheet' => mix('css/home/home.css')
])

@section('content')
    {{-- <a class="link" href="{{ url('/login') }}">Login</a> --}}
    <header class="header">
        <nav class="header__nav">
            <div class="header__nav__box">
                <a href="{{url('/')}}" class="header__nav__box--logo">Eldo4</a>
                <div class="header__nav__box--box">
                    <a href="{{ url('/login') }}" class="header__nav__box--login">Sākums</a>
                    <a href="{{ url('/login') }}" class="header__nav__box--login">Par Mums</a>
                    <a href="{{ url('/login') }}" class="header__nav__box--login">Kontakti</a>
                    @guest
                        <a href="{{ url('/login') }}" class="header__nav__box--login">Darbiniekiem</a>
                    @endguest
                </div>
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
    <div class="content">
    </div>
@endsection
    