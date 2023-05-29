@extends('layouts.admin', [
    'stylesheet' => mix('css/admin/cars.css'),
    'title' => 'Admin - All Cars',
    'pagename' => 'Mašīnu Saraksts'
])

@section('content')
<div class="cars">
    <div class="cars__nav">
        <a href="{{ url('admin/create_car') }}" class="cars__nav--button">+ Pievienot</a>
    </div>
    @if(!$cars->isEmpty())
        @foreach ($cars as $car)
        <div class="cars__box">
            <p class="cars__box--heading">Numura Zīme: <span class="strong">{{ $car['number_plate'] }}</span></p>
            <div class="cars__box__info">
                <div class="cars__box__info__content">
                    <p class="cars__box--data">Ražotājs: {{ $car['brand'] }}</p>
                    <p class="cars__box--data">Modelis: {{ $car['model'] }}</</p>
                </div>
                <div class="cars__box__info__content">
                    <p class="cars__box--data">Vards: {{ $car['owner_name'] }}</p>
                    <p class="cars__box--data">Talrunis: {{ $car['owner_phone'] }}</</p>
                </div>
                <div class="cars__box__info__content">
                    <p class="cars__box--data">Darbinieks: -</p>
                    <p class="cars__box--data">Piefiksētās Problēmas: {{ $car['marks_count'] }}</p>
                </div>
            </div>
            <p class="cars__box--date">Pievienots: {{ $car['created_at'] }}</p>
            <a class="cars__box--watch" href="{{ route('admin.car_view', $car->id) }}"><i class="fa fa-eye"></i></a>
            <a class="cars__box--edit" href="{{ route('admin.car_edit', $car->id) }}"><i class="fa fa-pencil"></i></a>
            <a class="cars__box--delete" href="{{ route('admin.car_edit', $car->id) }}"><i class="fa fa-trash"></i></a>
        </div>
        @endforeach
    @endif
        @if ($cars->hasPages())
            <div class="cars__paginators">
                @if ($cars->onFirstPage())
                    <a class="cars__paginators--link hidden" tabindex="-1" href="{{ $cars->previousPageUrl() }}"><</a>
                @else
                    <a class="cars__paginators--link" tabindex="-1" href="{{ $cars->previousPageUrl() }}"><</a>
                @endif
                    <p class="cars__paginators--index" >{{ $cars->currentPage() }}</p>
                @if ($cars->hasMorePages())
                    <a class="cars__paginators--link" href="{{ $cars->nextPageUrl() }}">></a>
                @else
                    <a class="cars__paginators--link hidden" href="{{ $cars->nextPageUrl() }}">></a>
                @endif
            </div>
        @endif           
    </div>  
</div>
@endsection



