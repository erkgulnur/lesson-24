<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="/register" method="POST">
        @csrf
        <label for="first_name">Enter your firstname:</label>
        <input type="text" name="first_name">
        <br>
        <label for="last_name">Enter your lastname:</label>
        <input type="text" name="last_name">
        <br>
        <label for="email">Enter your email:</label>
        <input type="email" name="email">
        <br>
        <label for="password">Enter your password:</label>
        <input type="password" name="password">
        <br>
        <label for="password_confirm">Confirm your password:</label>
        <input type="password" name="password_confirm">
        <br>
        <button type="submit">Register</button>
    </form>

    @if (isset($error))
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endif

</body>
</html>
