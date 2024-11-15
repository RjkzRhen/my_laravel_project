<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить пользователя</title>
</head>
<body>
<h1>Добавить пользователя</h1>

@if ($errors->any())
    <ul style="color: red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label for="last_name">Фамилия:</label>
    <input type="text" name="last_name" id="last_name" required>
    <br>

    <label for="first_name">Имя:</label>
    <input type="text" name="first_name" id="first_name" required>
    <br>

    <label for="middle_name">Отчество:</label>
    <input type="text" name="middle_name" id="middle_name">
    <br>

    <label for="age">Возраст:</label>
    <input type="number" name="age" id="age" required>
    <br>

    <label for="username">Имя пользователя:</label>
    <input type="text" name="username" id="username" required>
    <br>

    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password" required>
    <br>

    <button type="submit">Добавить</button>
</form>
</body>
</html>
