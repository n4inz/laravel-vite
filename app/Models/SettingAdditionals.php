<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingAdditionals extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function defined_check_list()
    {
        return $this->hasOne(DefinedCheckList::class , 'setting_additionals_id');
    }

}
