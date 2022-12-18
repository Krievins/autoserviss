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
        <label for="release_year">Izlaiduma Gads</label>
        <input type="text" name="release_year" id="release_year" required>
        {{-- Car Brand--}}
        <label for="model">Mašīnas Marka</label>
        <input type="text" name="brand" id="brand" required>
        {{-- Mašīnas Modelis--}}
        <label for="model">Mašīnas Modelis</label>
        <input type="text" name="model" id="model" required>
        {{-- Worker--}}
        <label for="worker">Problēmas Nodaļa</label>
        <input type="text" name="worker" id="worker" required>
        {{-- Description --}}
        <label for="descript">Darāmais</label>
        <input type="text" name="descript" id="descript" required>
        {{-- Description --}}
        <label for="filenam">Attēls</label>
        <input type="filenam" name="filenam" id="filenam" required>
        {{-- Button --}}
        <button type="submit">Submit</button>
    </form>
@endsection