<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form method="POST" action="/login">
        @csrf
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Login</button>
    </form>
    <a href="/register">Belum punya akun? Daftar di sini</a>
</body>
</html>
