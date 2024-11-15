<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Автоматическое поле для идентификатора (ID)
            $table->string('last_name'); // Строка для фамилии
            $table->string('first_name'); // Строка для имени
            $table->string('middle_name'); // Строка для отчества
            $table->integer('age'); // Целое число для возраста
            $table->string('username')->unique(); // Строка для имени пользователя с уникальностью
            $table->string('password'); // Строка для пароля
            $table->timestamps(); // Автоматические поля для created_at и updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
