@extends('layouts.admin', [
    'stylesheet' => mix('css/admin/create_car.css'),
    'title' => 'Admin - Create Car',
    // 'pagename' => 'Izveidot Mašīnu'
])

@section('content')
    <div class="addcar">
        <div class="addcar__box">
            <h1 class="addcar__box--heading">Automašīnas Dati</h1>
        </div>
        <div class="addcar__formbox">
            <form action="/admin/create_car" method="post" id="form" class="addcar__formbox__form">
                @csrf
                <div id="car_left" class="addcar__formbox__form__left">
                    {{-- Car VIN --}}
                    <label class="addcar__formbox__form__left--label" for="release_year">VIN</label>
                    <input class="addcar__formbox__form__left--input" type="text" name="vin" id="vin" required>
                    {{-- Owner Name --}}
                    <label class="addcar__formbox__form__left--label" for="owner_name">Vārds</label>
                    <input class="addcar__formbox__form__left--input" type="text" name="owner_name" id="owner_name" required>
                    {{-- Owner Phone Number --}}
                    <label class="addcar__formbox__form__left--label" for="owner_phone">Īpašnieka Telefona Nummurs</label>
                    <input class="addcar__formbox__form__left--input" type="text" name="owner_phone" id="owner_phone" required>
                    {{-- Number Plate --}}
                    <label class="addcar__formbox__form__left--label" for="number_plate">Mašīnas Numura Zīme</label>
                    <input class="addcar__formbox__form__left--input" type="text" name="number_plate" id="number_plate" required>
                    {{-- Make --}}
                    <label class="addcar__formbox__form__left--label" for="number_plate">Mašīnas Marka</label>
                    <input class="addcar__formbox__form__left--input" type="text" name="number_plate" id="make" required>
                    {{-- Model --}}
                    <label class="addcar__formbox__form__left--label" for="number_plate">Mašīnas Modelis</label>
                    <input class="addcar__formbox__form__left--input" type="text" name="number_plate" id="model" required>
                </div>
                <div id="car_right" class="addcar__formbox__form__right">
                    {{-- Release Year --}}
                    <label class="addcar__formbox__form__right--label" for="number_plate">Izlaiduma Gads</label>
                    <input class="addcar__formbox__form__right--input" type="text" name="number_plate" id="release_year" required>
                    {{-- Body Type --}}
                    <label class="addcar__formbox__form__right--label" for="number_plate">Virsbūves Tips</label>
                    <input class="addcar__formbox__form__right--input" type="text" name="body_type" id="body_type" required>
                    {{-- Engine CM3 --}}
                    <label class="addcar__formbox__form__right--label" for="number_plate">Motora Tilpums (CCM)</label>
                    <input class="addcar__formbox__form__right--input" type="text" name="number_plate" id="motor" required>
                    {{-- Fuel Type --}}
                    <label class="addcar__formbox__form__right--label" for="number_plate">Degvielas Tips</label>
                    <input class="addcar__formbox__form__right--input" type="text" name="number_plate" id="fuel_type" required>
                    {{-- Drive --}}
                    <label class="addcar__formbox__form__right--label" for="number_plate">Piedziņas Tips</label>
                    <input class="addcar__formbox__form__right--input" type="text" name="number_plate" id="drive_type" required>
                    {{-- Sequential Number --}}
                    <label class="addcar__formbox__form__right--label" for="number_plate">Ātrumkārbas Nummurs</label>
                    <input class="addcar__formbox__form__right--input" type="text" name="number_plate" id="sql_number" required>
                </div>
            </form>
        </div>
    </div>
    <div class="canvas">
        <div class="canvas__box">
            <h1 class="canvas__box--heading">Mašīnas Problēmas Atzīmēšana</h1>
        </div>
        <div class="canvas__formbox">
            <div class="repair" id="make">
                <canvas class="canvasbox" id="myCanvas"></canvas>
                <div class="" id="parent"></div>
            </div>
        </div>
    </div>


    <script src="{{ asset('js/ajax_decode.js') }}" defer></script>
    <script src="{{ asset('js/canvas.js') }}" defer></script>
    
@endsection 