<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingServiceCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function service_subcategorys()
    {
        return $this->hasMany(SettingServiceSubcategory::class, 'service_categories_id');
    }
}
