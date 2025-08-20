<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // 👈 change
use Illuminate\Notifications\Notifiable;

class Alumni extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'batch_year',
        'user_type',
        'status',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
