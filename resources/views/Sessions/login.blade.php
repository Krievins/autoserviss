@extends('layouts.main', [
    'stylesheet' => mix('css/home/home.css')
])

@section('content')
    <p>login</p>
    <form method="POST" action="/login">
        @csrf
        {{-- E-mail --}}
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        {{-- Password --}}
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        {{-- Button --}}
        <button type="submit">Log In</button>
    </form>
@endsection