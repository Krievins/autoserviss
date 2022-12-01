@extends('layouts.main', [
    'stylesheet' => mix('css/home/home.css'),
    'title' => 'Admin - Create Category'
])

@section('content')
    <p>Admin</p>
    <a href="{{ url('admin/create_user') }}">Create User</a>
    <a href="{{ url('admin/users') }}">Users</a>
    <h1 style="margin-top: 40px;">Create User</h1>
    <form action="/admin/create_category" method="post">
        @csrf
        {{-- Name --}}
        <label for="category_name">Amata Nosaukums</label>
        <input type="text" name="category_name" id="category_name" required>
        {{-- Button --}}
        <button type="submit">Submit</button>
    </form>
@endsection