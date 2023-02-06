@extends('layouts.admin', [
    'stylesheet' => mix('css/admin/users.css'),
    'pagename' => 'Darbinieku Saraksts'
])

@section('content')
    <div class="users">
        <div class="users__box">
            <table>
                <tr>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Username</th>
                </tr>
                @foreach ($members as $member)
                    <tr>
                        <td>{{ $member['name'] }}</td>
                        <td>{{ $member['email'] }}</td>
                        <td>{{ $member['username'] }}</td>
                    </tr> 
                @endforeach 
            </table>
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
            @endif
        </div>  
    </div>
@endsection