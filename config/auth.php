<?php

return [

    'defaults' => [
        'guard' => 'web', // keep default for admins
        'passwords' => 'users',
    ],

    'guards' => [
    'web' => [ // for Filament/admins
        'driver' => 'session',
        'provider' => 'users',
    ],

    'alumni' => [ // for frontend Breeze
        'driver' => 'session',
        'provider' => 'alumnis',
    ],
],

'providers' => [
    'users' => [
        'driver' => 'eloquent',
        'model' => App\Models\User::class,
    ],

    'alumnis' => [
        'driver' => 'eloquent',
        'model' => App\Models\Alumni::class,
    ],
],

'passwords' => [
    'users' => [
        'provider' => 'users',
        'table' => 'password_resets',
        'expire' => 60,
        'throttle' => 60,
    ],

    'alumnis' => [
        'provider' => 'alumnis',
        'table' => 'alumni_password_resets', // create migration if needed
        'expire' => 60,
        'throttle' => 60,
    ],
],

    'password_timeout' => 10800,
];
