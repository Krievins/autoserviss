@extends('layouts.admin', [
    'stylesheet' => mix('css/home/home.css'),
    'pagename' => 'Izveidot Darbinieku'
])

@section('content')
    <h1 style="margin-top: 40px;">Create User</h1>
    <form action="/admin/create_user" method="post">
        @csrf
        {{-- Name --}}
        <label for="name">Vārds</label>
        <input type="text" name="name" id="name" required>
        {{-- SurName --}}
        <label for="surnname">Uzvārds</label>
        <input type="text" name="surname" id="surname" required>
        {{-- E-mail --}}
        <label for="email">E-pasts</label>
        <input type="text" name="email" id="email" required>
        {{-- Phone --}}
        <label for="phone">Telefona Numurs</label>
        <input type="text" name="phone" id="phone" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="8"required>
        {{-- Username --}}
        <label for="username">Lietotājvārds</label>
        <input type="text" name="username" id="username" required>
        {{-- Password --}}
        <label for="password">Parole</label>
        <input type="password" name="password" id="password" required>
        {{-- Professie ID --}}
        <label for="category">Amats</label>
        <select name="role_id" class="admin__container__content__form-select">
            <option value="">-</option>
            @foreach ($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>
            @endforeach
        </select>
        {{-- Button --}}
        <button type="submit">Submit</button>
    </form>
@endsection