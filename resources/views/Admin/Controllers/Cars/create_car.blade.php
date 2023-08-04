@extends('layouts.admin', [
    'stylesheet' => mix('css/admin/Cars/create_car.css'),
    'title' => 'Admin - Create Car',
    // 'pagename' => 'Izveidot Mašīnu'
])

@section('content')

    <div class="addcar">
        <form action="/admin/create_car" method="post" id="add-user-form" class="">
        @csrf
            <div class="addcar__box">
                <h1 class="addcar__box--heading">Automašīnas Dati</h1>
            </div>
            <div class="addcar__formbox">
                
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
                        <input class="addcar__formbox__form__left--input" type="text" name="brand" id="make" required>
                        {{-- Model --}}
                        <label class="addcar__formbox__form__left--label" for="number_plate">Mašīnas Modelis</label>
                        <input class="addcar__formbox__form__left--input" type="text" name="model" id="model" required>
                    </div>
                    <div id="car_right" class="addcar__formbox__form__right">
                        {{-- Release Year --}}
                        <label class="addcar__formbox__form__right--label" for="number_plate">Izlaiduma Gads</label>
                        <input class="addcar__formbox__form__right--input" type="text" name="release_year" id="release_year" required>
                        {{-- Body Type --}}
                        <label class="addcar__formbox__form__right--label" for="number_plate">Virsbūves Tips</label>
                        <input class="addcar__formbox__form__right--input" type="text" name="body_type" id="body_type" required>
                        {{-- Engine CM3 --}}
                        <label class="addcar__formbox__form__right--label" for="number_plate">Motora Tilpums (CCM)</label>
                        <input class="addcar__formbox__form__right--input" type="text" name="motor" id="motor" required>
                        {{-- Fuel Type --}}
                        <label class="addcar__formbox__form__right--label" for="number_plate">Degvielas Tips</label>
                        <input class="addcar__formbox__form__right--input" type="text" name="fuel_type" id="fuel_type" required>
                        {{-- Drive --}}
                        <label class="addcar__formbox__form__right--label" for="number_plate">Piedziņas Tips</label>
                        <input class="addcar__formbox__form__right--input" type="text" name="drive_type" id="drive_type" required>
                        {{-- Sequential Number --}}
                        <label class="addcar__formbox__form__right--label" for="number_plate">Ātrumkārbas Nummurs</label>
                        <input class="addcar__formbox__form__right--input" type="text" name="sql_number" id="sql_number" required>
                        <input type="submit" value="submit">
                    </div>
                </div>
            </div>
            <div class="canvas">
                <div class="canvas__box">
                    <h1 class="canvas__box--heading">Mašīnas Problēmas Atzīmēšana</h1>
                </div>
                <div class="canvas__formbox">
                    <div class="repair" id="make">
                        <canvas class="canvasbox" id="myCanvas"></canvas>
                    </div>
                    <div class="input_fields" id="parent"></div>
                </div>
            </div>
        </form>
    </div>
    <script src="{{ asset('js/ajax_decode.js') }}" defer></script>
    <script src="{{ asset('js/ajax_create_car.js') }}" defer></script>

    
@endsection 