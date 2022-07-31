<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Traits\HasRoles;
class Staf extends User
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;
    protected $guard = 'staf';

    protected $fillable = [
        'full_name', 'email', 'password','avatar', 'type', 'tenants_id', 'users_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
