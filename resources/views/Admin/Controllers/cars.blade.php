@extends('layouts.admin', [
    'stylesheet' => mix('css/home/home.css'),
    'title' => 'Admin - All Cars',
    'pagename' => 'Mašīnu Saraksts'
])

@section('content')
    <h1 style="margin-top: 40px;">Mašīnu Saraksts</h1>
    <table>
        <thead>
            <tr>
                <th>Vārds</th>
                <th>Numura Zīme</th>
                <th>Labojamais</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <td>{{ $car['owner_name'] }}</td>
                    <td>{{ $car['number_plate'] }}</td>
                    <td>{{ $car['descript'] }}</td>
                </tr> 
            @endforeach 
        </tbody>
    </table>
@endsection