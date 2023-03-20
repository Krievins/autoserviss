@extends('layouts.admin', [
    'stylesheet' => mix('css/admin/create_user.css'),
    // 'pagename' => 'Izveidot Darbinieku'
])

@section('content')
    <div class="adduser">
        <div class="adduser__box">
            <h1 class="adduser__box--heading">Izveidot Lietotāju</h1>
        </div>
        <div class="adduser__formbox">
            <form id="add-user-form" class="adduser__formbox__form" action="{{ url("/admin/create_user") }}" method="post"> 
                @csrf
                <div class="adduser__formbox__form__left">
                    <label class="adduser__formbox__form__left--label" for="name">Vārds</label>
                    <input class="adduser__formbox__form__left--input" type="text" name="name" id="name" required>
                    {{-- SurName --}}
                    <label class="adduser__formbox__form__left--label" for="surnname">Uzvārds</label>
                    <input class="adduser__formbox__form__left--input" type="text" name="surname" id="surname" required>
                    {{-- E-mail --}}
                    <label class="adduser__formbox__form__left--label" for="email">E-pasts</label>
                    <input class="adduser__formbox__form__left--input" type="text" name="email" id="email" required>
                    {{-- Phone --}}
                    <label class="adduser__formbox__form__left--label" for="phone">Telefona Numurs</label>
                    <input class="adduser__formbox__form__left--input" type="text" name="phone" id="phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="8"required>
                </div>
                <div class="adduser__formbox__form__right">
                    {{-- Username --}}
                    <label class="adduser__formbox__form__right--label" for="username">Lietotājvārds</label>
                    <input class="adduser__formbox__form__right--input" type="text" name="username" id="username" required>
                    {{-- Password --}}
                    <label class="adduser__formbox__form__right--label" for="password">Parole</label>
                    <input class="adduser__formbox__form__right--input" type="password" name="password" id="password" required>
                    {{-- Professie ID --}}
                    <label class="adduser__formbox__form__right--label" for="category">Amats</label>
                    <select name="role_id" id="role_id" class="adduser__formbox__form__right--select">
                    <option value="">-</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>
                    @endforeach
                </select>
                </div>
                {{-- Button --}}
                <button class="adduser__formbox__form--button" type="submit">Pievienot</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/ajax_create_user.js') }}" defer></script>
@endsection