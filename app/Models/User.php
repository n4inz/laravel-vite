<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Multitenancy\Models\Tenant;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'tenants_id',
        'tenants_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tenants()
    {
        return $this->belongsTo(Tenant::class, 'tenants_id');
    }

    public function SettingGeneral()
    {
        return $this->hasOne(SettingGeneral::class, 'users_id');
    }

    public function SettingDetail()
    {
        return $this->hasOne(SettingDetail::class, 'users_id');
    }

    public function SettingUsers()
    {
        return $this->hasOne(SettingUsers::class, 'users_id');
    }

    public function SettingAdditionals()
    {
        return $this->hasOne(SettingAdditionals::class, 'users_id');
    }

    public function client()
    {
        return $this->hasMany(Client::class, 'users_id');
    }
}
