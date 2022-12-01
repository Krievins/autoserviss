@extends('layouts.admin', [
    'stylesheet' => mix('css/home/home.css')
])

@section('content')
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