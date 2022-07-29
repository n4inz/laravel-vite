<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;

use Illuminate\Notifications\Notifiable;


class Staf extends User
{
    use Notifiable;

    protected $guard = 'stafs';

    protected $fillable = [
        'full_name', 'email', 'password','avatar', 'type', 'tenants_id', 'users_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
