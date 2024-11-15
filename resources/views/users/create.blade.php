<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавить пользователя</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input:focus {
            border-color: #007bff;
            outline: none;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label for="last_name">Фамилия</label>
    <input type="text" id="last_name" name="last_name" placeholder="Введите фамилию" required>

    <label for="first_name">Имя</label>
    <input type="text" id="first_name" name="first_name" placeholder="Введите имя" required>

    <label for="middle_name">Отчество</label>
    <input type="text" id="middle_name" name="middle_name" placeholder="Введите отчество">

    <label for="age">Возраст</label>
    <input type="number" id="age" name="age" placeholder="Введите возраст" min="1" max="150" required>

    <label for="username">Логин</label>
    <input type="text" id="username" name="username" placeholder="Введите логин" required>

    <label for="password">Пароль</label>
    <input type="password" id="password" name="password" placeholder="Введите пароль" required>

    <input type="submit" value="Сохранить">
</form>
</body>
</html>
