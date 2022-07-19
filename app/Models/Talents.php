<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talents extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function type_helper()
    {
        return $this->hasMany(TalentTypeHelper::class, 'talents_id', 'id');
    }

    public function languages()
    {
        return $this->hasMany(TalentLanguage::class, 'talents_id');

    }
}
