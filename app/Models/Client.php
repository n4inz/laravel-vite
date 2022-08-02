<?php

namespace App\Models;

use App\Scopes\WhereUsersIdScope;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function users()
    {
        return $this->belongsTo(User::class,'users_id');
    }

    public function attached_file()
    {
        return $this->hasOne(ClientAttachedFile::class, 'clients_id');
    }

    // public function scopeActive($query)
    // {
    //     $query->where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id);
    // }

    protected static function booted()
    {
        static::addGlobalScope(new WhereUsersIdScope);
    }

    // public function scopeActive($query)
    // {
    //     return $query->where('users_id', auth()->user()->id ?? auth()->guard('staf')->user()->id);
    // }
    
}
