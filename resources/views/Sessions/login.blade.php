@extends('layouts.main', [
    'stylesheet' => mix('css/sessions/login.css')
])

@section('content')
    <div class="login">
        <div class="login__box">
            <img class="login__box--logo" src="{{URL::asset('/img/autool_logo.png')}}" alt="logo">
            <h1 class="login__box--heading">Ielogoties Lietotāja Panelī</h1>
            <p class="login__box--undertext">Ievadi savu e-pastu un paroli</p>
            <form class="login__box__form" method="POST" action="/login">
                @csrf
                {{-- E-mail --}}
                <label class="login__box__form--label" for="email">Epasts</label>
                <input class="login__box__form--input" type="email" name="email" id="email" required>
                @error('email')
                    <p>{{ $message }}</p>
                @enderror
                {{-- Password --}} 
                <label class="login__box__form--label" for="password">Parole</label>
                <input class="login__box__form--input" type="password" name="password" id="password" required>
                @error('password')
                    <p>{{ $message }}</p>
                @enderror
                {{-- Button --}}
                <button  class="login__box__form--button" type="submit">Ielogoties</button>
            </form>
        </div>
    </div>
@endsection