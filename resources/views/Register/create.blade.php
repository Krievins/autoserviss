<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="/register" method="post">
        @csrf
        {{-- Name --}}
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        {{-- E-mail --}}
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required>
        {{-- Username --}}
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        {{-- Password --}}
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        {{-- Button --}}
        <button type="submit">Submit</button>
    </form>
</body>
</html>