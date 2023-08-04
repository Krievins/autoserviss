@extends('layouts.admin', [
    'stylesheet' => mix('css/admin/Cars/view_car.css'),
    'title' => 'Admin - Create Car',
    // 'pagename' => 'Izveidot Mašīnu'
])


@section('content')
    <div class="view">
        <div class="view__box">
            <h1 class="view__box--heading">Info Pārskats Par - {{ $cars['number_plate'] }}</h1>
            <h1 class="view__box--date">{{ $cars['created_at'] }}</h1>
        </div>
        <div class="view__content">
            <div class="view__content__car">
                <p class="view__content__left--owner">Dati Par mašīnu</p>
                <div class="view__content__car__info">
                    <div class="view__content__car__info--box">
                        <p class="view__content__car__info--box--top"><span class="strong">Ražotājs:</span> {{$cars['brand']}}</p>
                        <p class="view__content__car__info--box--bottom"><span class="strong">Modelis:</span> {{$cars['model']}}</p>
                    </div>
                    <div class="view__content__car__info--box">
                        <p class="view__content__car__info--box--top"><span class="strong">Izlaiduma Gads:</span> {{$cars['release_year']}}</p>
                        <p class="view__content__car__info--box--bottom"><span class="strong">Virsbūves Tips:</span> {{$cars['body_type']}}</p>
                        <p class="view__content__car__info--box--bottom"><span class="strong">Piedziņas Tips:</span> {{$cars['drive_type']}}</p>
                    </div>
                    <div class="view__content__car__info--box">
                        <p class="view__content__car__info--box--top"><span class="strong">Motora Tilpums:</span> {{$cars['motor']}}</p>
                        <p class="view__content__car__info--box--bottom"><span class="strong">Degvielas Tips:</span> {{$cars['fuel_type']}}</p>
                        <p class="view__content__car__info--box--bottom"><span class="strong">Ātrumkārbas Numurs:</span>  {{$cars['sql_number']}}</p>
                    </div>
                </div>
            </div>
            <div class="view__content__box">
                <p class="view__content__left--owner">Īpašnieks</p>
                <p class="view__content__left--owner--name"><span class="strong">Vārds:</span> {{$cars['owner_name']}}</p>
                <p class="view__content__left--owner--phone"><span class="strong">Talrunis:</span> {{$cars['owner_phone']}}</p>
            </div>
            <div class="view__content__status">
                <p class="view__content__left--owner">Status</p>
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
    </div>
    {{-- <script src="{{ asset('js/ajax_decode.js') }}" defer></script>
    <script src="{{ asset('js/ajax_create_car.js') }}" defer></script> --}}

    
@endsection 