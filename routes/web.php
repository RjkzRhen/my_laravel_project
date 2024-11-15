<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('users.index'); // Список пользователей
Route::get('/users/create', [UserController::class, 'create'])->name('users.create'); // Форма добавления пользователя
Route::post('/users', [UserController::class, 'store'])->name('users.store'); // Обработка формы
Route::get('/', function () {
    return view('welcome');
});
