@extends('layouts.admin', [
    'stylesheet' => mix('css/home/home.css'),
    'title' => 'Admin - All Cars',
    'pagename' => 'Profesiju Saraksts'
])



@section('content')
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