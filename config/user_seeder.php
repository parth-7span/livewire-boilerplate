<?php

use Illuminate\Support\Str;

return [
    [
        'name' => 'Admin',
        'type' => 'admin',
        'email' => 'admin@example.com',
        'email_verified_at' => now(),
        'password' => 'password',
        'remember_token' => Str::random(10),
    ],
    [
        'name' => 'User',
        'type' => 'user',
        'email' => 'user@example.com',
        'email_verified_at' => now(),
        'password' => 'password',
        'remember_token' => Str::random(10),
    ]
];
