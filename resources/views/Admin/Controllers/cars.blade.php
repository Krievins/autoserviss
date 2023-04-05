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
    <table class="cars_table">
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
                    <td>
                        <form onchange="redirect()">
                            <select class="" id="redirect" name="redirect">
                                <option value="">-</option>
                                <option value="">Skatit</option>
                                <option value="">Labot</option>
                                <option value="">Dzēst</option>
                            </select>
                        </form>
                    </td>
                </tr> 
            @endforeach 
        </tbody>
    </table>
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



