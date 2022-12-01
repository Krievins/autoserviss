@extends('layouts.main', [
    'stylesheet' => mix('css/home/home.css'),
    'title' => 'Admin'
])

@section('content')
    <p>Admin</p>
    <a href="{{ url('admin/create_user') }}">Create User</a>
    <a href="{{ url('admin/users') }}">Users</a>
    <a href="{{ url('admin/create_car') }}">Create Car</a>
@endsection