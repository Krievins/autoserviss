@extends('layouts.admin', [
    'stylesheet' => mix('css/home/home.css'),
    'title' => 'Admin - Create Car',
    'pagename' => 'Izveidot Mašīnu'
])

@section('content')
    <h1 style="margin-top: 40px;">Izveidot Mašīnu</h1>
    <form action="/admin/create_car" method="post">
        @csrf
        {{-- Owner Name --}}
        <label for="owner_name">Īpašnieka Vārds</label>
        <input type="text" name="owner_name" id="owner_name" required>
        {{-- Owner Phone Number --}}
        <label for="owner_phone">Īpašnieka Telefona Nummurs</label>
        <input type="text" name="owner_phone" id="owner_phone" required>
        {{-- Number Plate --}}
        <label for="number_plate">Mašīnas Numura Zīme</label>
        <input type="text" name="number_plate" id="number_plate" required>
        {{-- Release Year --}}
        <label for="release_year">VIN</label>
        <input type="text" name="vin" id="vin" required>
        <button type="submit">Submit</button>
    </form>
    <div id="make"></div>
    <script src="{{ asset('js/ajax_decode.js') }}" defer></script>
@endsection 