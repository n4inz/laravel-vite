<?php

namespace App\Models;

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
    //     return $query->where('users_id', auth()->user()->id ?? auth()->guard('staf')->user()->id);
    // }
    
}
