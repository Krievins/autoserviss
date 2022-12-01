<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (isset($stylesheet))
        <link href="{{ $stylesheet }}" rel="stylesheet"/>
    @endif
    @if (isset($title))
        <title>{{ $title }}</title>
    @endif
</head>
<body>
    <main>
        @yield('content')
    </main>
</body>
</html>