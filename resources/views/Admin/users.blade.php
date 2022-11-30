@extends('layouts.main', [
    'stylesheet' => mix('css/home/home.css')
])

@section('content')
    <p>Admin</p>
    <a href="{{ url('admin/create_user') }}">Create User</a>
    <a href="{{ url('admin/users') }}">Users</a>
    <h1 style="margin-top: 40px;">All Users</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Username</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($members as $member)
                <tr>
                    <td>{{ $member['name'] }}</td>
                    <td>{{ $member['email'] }}</td>
                    <td>{{ $member['username'] }}</td>
                </tr> 
            @endforeach 
        </tbody>
    </table>
@endsection