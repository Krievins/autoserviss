<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/dashboard.css') }}">
    @if (isset($stylesheet))
        <link href="{{ $stylesheet }}" rel="stylesheet"/>
    @endif
    @if (isset($title))
        <title>{{ $title }}</title>
    @endif
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body>
    {{-- @dd($users) --}}
    <main>
        <header class="header">
            <nav class="header__nav">
                <div class="header__nav__box">
                    <a href="{{url('/')}}" class="header__nav__box--logo">Admin</a>
                    @guest
                        <a href="{{ url('/login') }}" class="header__nav__box--login">Login</a>
                    @endguest
                    @auth
                        <span>Welcome, {{ auth()->user()->name }}!</span>
                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    @endauth
                </div>
            </nav>
            {{-- Dashboard --}}
            <section class="dashboard">
                <a href="{{ url('admin/create_user') }}">Create User</a>
                <a href="{{ url('admin/users') }}">Users</a>
                <a href="{{ url('admin/create_car') }}">Create Car</a>
                <a href="{{ url('admin/cars') }}">Cars</a>
                <a href="{{ url('admin/create_category') }}">Create Category</a>
                <a href="{{ url('admin/category') }}">Categories</a>
                </section>
    
                @yield('content')
                <div id="example" data-tsid="{{ $users }}"></div>
        </header>
    </main>
    
</body>
</html>