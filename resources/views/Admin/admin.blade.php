@extends('layouts.main', [
    'stylesheet' => mix('css/home/home.css')
])

@section('content')
    <p>Admin</p>
    <a href="{{ url('admin/create_user') }}">Create User</a>
    <a href="{{ url('admin/users') }}">Users</a>
@endsection