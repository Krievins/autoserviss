@extends('layouts.admin', [
    'stylesheet' => mix('css/admin/users.css'),
    'pagename' => 'Darbinieku Saraksts'
])

@section('content')
    <div class="users">
        <div class="users__nav">
            <a href="{{ url('admin/create_user') }}" class="users__nav--button">+ Pievienot</a>
        </div>
        @foreach ($members as $member)
            <div class="users__box">
                <p class="users__box--heading">Vārds: <span class="strong">{{  $member['name'], $member['surname'] }}</span></p>
                <div class="users__box__info">
                    <div class="users__box__info__content">
                        <p class="users__box--data">Vārds: {{ $member['name'] }}</p>
                        <p class="users__box--data">Uzvārds: {{ $member['surname'] }}</</p>
                    </div>
                    <div class="users__box__info__content">
                        <p class="users__box--data">E-pasts: {{ $member['email'] }}</p>
                        <p class="users__box--data">Talrunis: {{ $member['phone'] }}</</p>
                    </div>
                    <div class="users__box__info__content">
                        <p class="users__box--data">Automašīna: -</p>
                        <p class="users__box--data">Lietotājvārds: {{ $member['username'] }}</p>
                    </div>
                </div>
                <p class="users__box--date">Pievienots: {{ $member['created_at'] }}</p>
                <a class="users__box--watch" href="{{ route('admin.user_view', $member->id) }}"><i class="fa fa-eye"></i></a>
                <a class="users__box--edit" href="{{ route('admin.user_edit', $member->id) }}"><i class="fa fa-pencil"></i></a>
                <a class="users__box--delete" href="{{ route('admin.user_edit', $member->id) }}"><i class="fa fa-trash"></i></a>
            </div>
        @endforeach
        @if ($members->hasPages())
            <div class="users__paginators">
                @if ($members->onFirstPage())
                    <a class="users__paginators--link hidden" tabindex="-1" href="{{ $members->previousPageUrl() }}"><</a>
                @else
                    <a class="users__paginators--link" tabindex="-1" href="{{ $members->previousPageUrl() }}"><</a>
                @endif
                    <p class="users__paginators--index" >{{ $members->currentPage() }}</p>
                @if ($members->hasMorePages())
                    <a class="users__paginators--link" href="{{ $members->nextPageUrl() }}">></a>
                @else
                    <a class="users__paginators--link hidden" href="{{ $members->nextPageUrl() }}">></a>
                @endif
            </div>
        @endif           
        </div>  
    </div>
@endsection