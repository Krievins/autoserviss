@extends('layouts.admin', [
    'stylesheet' => mix('css/admin/create_category.css'),
    // 'pagename' => 'Izveidot Darbinieku'
])

@section('content')
    <div class="addcat">
        <div class="addcat__box">
            <h1 class="addcat__box--heading">Izveidot Amatu</h1>
        </div>
        <div class="addcat__formbox">
            <form id="add-user-form" class="addcat__formbox__form" action="{{ url("/admin/create_category") }}" method="post"> 
                @csrf
                <div class="addcat__formbox__form__left">
                    <label class="addcat__formbox__form__left--label" for="name">Nosaukums</label>
                    <input class="addcat__formbox__form__left--input" type="text" name="name" id="name" required>
                </div>
                {{-- Button --}}
                <button class="addcat__formbox__form--button" type="submit">Pievienot</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/ajax_create_category.js') }}" defer></script>
@endsection