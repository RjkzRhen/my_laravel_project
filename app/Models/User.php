<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    // Разрешенные для массового заполнения поля
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'age',
        'username',
        'password',
    ];
}
