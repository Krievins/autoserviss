@extends('layouts.admin', [
    'stylesheet' => mix('css/admin/category.css'),
    'title' => 'Admin - Amatu Saraksts',
    'pagename' => 'Profesiju Saraksts'
])



@section('content')
<div class="category">
    <div class="category__nav">
        <a href="{{ url('admin/create_category') }}" class="category__nav--button">+ Pievienot</a>
    </div>
    @if(!$category->isEmpty())
    <table class="category__table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nosaukums</th>
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
    @endif
        @if ($category->hasPages())
            <div class="category__paginators">
                @if ($category->onFirstPage())
                    <a class="category__paginators--link hidden" tabindex="-1" href="{{ $category->previousPageUrl() }}"><</a>
                @else
                    <a class="category__paginators--link" tabindex="-1" href="{{ $category->previousPageUrl() }}"><</a>
                @endif
                    <p class="category__paginators--index" >{{ $category->currentPage() }}</p>
                @if ($category->hasMorePages())
                    <a class="category__paginators--link" href="{{ $category->nextPageUrl() }}">></a>
                @else
                    <a class="category__paginators--link hidden" href="{{ $category->nextPageUrl() }}">></a>
                @endif
            </div>
        @endif           
    </div>  
</div>
@endsection