@extends('layouts.admin', [
    'stylesheet' => mix('css/home/home.css'),
    'title' => 'Admin - Create Category',
    'pagename' => 'Izveidot Amatu'
])

@section('content')
    <h1 style="margin-top: 40px;">Izveidot Amatu</h1>
    <form action="/admin/create_category" method="post">
        @csrf
        {{-- Name --}}
        <label for="category_name">Amata Nosaukums</label>
        <input type="text" name="category_name" id="category_name" required>
        {{-- Button --}}
        <button type="submit">Apstiprināt</button>
    </form>
@endsection