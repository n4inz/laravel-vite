<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Multitenancy\Models\Tenant;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'tenants_id',
        'tenants_id',
        'color'
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

    public function SettingJobStatus()
    {
        return $this->hasMany(SettingJobModelsStatus::class , 'users_id');
    }

    public function SettingTalentStatus()
    {
        return $this->hasMany(SettingStatusTalent::class , 'users_id');
    }

    public function SettingUsers()
    {
        return $this->hasOne(SettingUsers::class, 'users_id');
    }

    public function SettingAdditionals()
    {
        return $this->hasOne(SettingAdditionals::class, 'users_id');
    }

    public function SettingCategory()
    {
        return $this->hasMany(SettingServiceCategory::class ,'users_id');
    }
    public function SettingSubCategory()
    {
        return $this->hasMany(SettingServiceSubcategory::class ,'users_id');
    }

    public function SettingCalendly()
    {
        return $this->hasOne(SettingCalendlyApi::class,'users_id');
    }

    public function client()
    {
        return $this->hasMany(Client::class, 'users_id');
    }

    public function avatar()
    {
        return $this->hasOne(Avatar::class , 'users_id');
    }

    public function staf()
    {
        return $this->hasOne(Staf::class, 'users_id');
    }

    public function notification()
    {
        return $this->hasMany(Notification::class, 'users_id');
    }
    // public function staf_agency_name()
    // {
    //     return $this->hasOne(SettingGeneral::class, 'users_id','users_agency_id');
    // }

    public function staf_agency()
    {
        return $this->hasMany(Staf::class, 'users_agency_id');
    }

    public function role()
    {
        return $this->hasOne(Role::class, 'users_id');
    }
}
