<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <p>login</p>
    <form method="POST" action="/login">
        @csrf
        {{-- E-mail --}}
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required>
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        {{-- Password --}}
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        {{-- Button --}}
        <button type="submit">Log In</button>
    </form>
</body> 
</html>