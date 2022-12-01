@extends('layouts.main', [
    'stylesheet' => mix('css/home/home.css'),
    'title' => 'Admin - All Cars'
])

@section('content')
    <p>Admin</p>
    <a href="{{ url('admin/create_user') }}">Create User</a>
    <a href="{{ url('admin/users') }}">Users</a>
    <h1 style="margin-top: 40px;">All Cars</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Amata Nosaukums</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $cat)
                <tr>
                    <td>{{ $cat['id'] }}</td>
                    <td>{{ $cat['category_name'] }}</td>
                </tr> 
            @endforeach 
        </tbody>
    </table>
@endsection