<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Staf extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guard = 'staf';

    protected $guarded = [
        'id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function staf_agency()
    {
        return $this->belongsTo(User::class, 'users_agency_id');
    }
}
