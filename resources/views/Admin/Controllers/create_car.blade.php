@extends('layouts.admin', [
    'stylesheet' => mix('css/admin/create_car.css'),
    'title' => 'Admin - Create Car',
    'pagename' => 'Izveidot Mašīnu'
])

@section('content')
    <div class="car">
        <h1 class="car-info">Info Par automašīnu</h1>
        <form action="/admin/create_car" method="post" id="form" class="car__form">
            @csrf
            <div id="car_left" class="car__form__left">
                {{-- Car VIN --}}
                <label class="car__form--label" for="release_year">VIN</label>
                <input class="car__form--input" type="text" name="vin" id="vin" required>
                {{-- Owner Name --}}
                <label class="car__form--label" for="owner_name">Īpašnieka Vārds</label>
                <input class="car__form--input" type="text" name="owner_name" id="owner_name" required>
                {{-- Owner Phone Number --}}
                <label class="car__form--label" for="owner_phone">Īpašnieka Telefona Nummurs</label>
                <input class="car__form--input" type="text" name="owner_phone" id="owner_phone" required>
                {{-- Number Plate --}}
                <label class="car__form--label" for="number_plate">Mašīnas Numura Zīme</label>
                <input class="car__form--input" type="text" name="number_plate" id="number_plate" required>
                {{-- Make --}}
                <label class="car__form--label" for="number_plate">Mašīnas Marka</label>
                <input class="car__form--input" type="text" name="number_plate" id="make" required>
                {{-- Model --}}
                <label class="car__form--label" for="number_plate">Mašīnas Modelis</label>
                <input class="car__form--input" type="text" name="number_plate" id="model" required>
            </div>
            <div id="car_right" class="car__form__right">
                {{-- Release Year --}}
                <label class="car__form--label" for="number_plate">Izlaiduma Gads</label>
                <input class="car__form--input" type="text" name="number_plate" id="release_year" required>
                {{-- Body Type --}}
                <label class="car__form--label" for="number_plate">Virsbūves Tips</label>
                <input class="car__form--input" type="text" name="number_plate" id="body_type" required>
                {{-- Engine CM3 --}}
                <label class="car__form--label" for="number_plate">Motora Tilpums (CCM)</label>
                <input class="car__form--input" type="text" name="number_plate" id="motor" required>
                {{-- Fuel Type --}}
                <label class="car__form--label" for="number_plate">Degvielas Tips</label>
                <input class="car__form--input" type="text" name="number_plate" id="fuel_type" required>
                {{-- Drive --}}
                <label class="car__form--label" for="number_plate">Piedziņas Tips</label>
                <input class="car__form--input" type="text" name="number_plate" id="drive_type" required>
                {{-- Sequential Number --}}
                <label class="car__form--label" for="number_plate">Ātrumkārbas Nummurs</label>
                <input class="car__form--input" type="text" name="number_plate" id="sql_number" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
    <div class="repair" id="make">
        <canvas id="myCanvas" width="200" height="200"></canvas>

        <div class="input_fields"></div> 
    </div>
    <script src="{{ asset('js/ajax_decode.js') }}" defer></script>
@endsection 