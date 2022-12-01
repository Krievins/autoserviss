@extends('layouts.admin', [
    'stylesheet' => mix('css/home/home.css'),
    'title' => 'Admin - Create Category'
])

@section('content')
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