<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Список пользователей
    public function index()
    {
        $users = User::all(); // Получить всех пользователей
        return view('users.index', compact('users')); // Передать их в шаблон
    }

    // Форма для добавления нового пользователя
    public function create()
    {
        return view('users.create');
    }

    // Обработка добавления нового пользователя
    public function store(Request $request)
    {
        // Валидация данных
        $validated = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'age' => 'required|integer|min:1|max:150',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:6',
        ]);

        // Сохранение нового пользователя
        User::create([
            'last_name' => $validated['last_name'],
            'first_name' => $validated['first_name'],
            'middle_name' => $validated['middle_name'],
            'age' => $validated['age'],
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']), // Хэширование пароля
        ]);

        return redirect()->route('users.index')->with('success', 'Пользователь успешно добавлен!');
    }
}
