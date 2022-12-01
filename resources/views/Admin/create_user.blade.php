@extends('layouts.admin', [
    'stylesheet' => mix('css/home/home.css')
])

@section('content')
    <h1 style="margin-top: 40px;">Create User</h1>
    <form action="/admin/create_user" method="post">
        @csrf
        {{-- Name --}}
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        {{-- E-mail --}}
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required>
        {{-- Username --}}
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        {{-- Password --}}
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        {{-- Button --}}
        <button type="submit">Submit</button>
    </form>
@endsection