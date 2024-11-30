<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form method="POST" action="/register">
        @csrf
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <label for="password_confirmation">Konfirmasi Password:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>
        <button type="submit">Daftar</button>
    </form>
    <a href="/login">Sudah punya akun? Login di sini</a>
</body>
</html>