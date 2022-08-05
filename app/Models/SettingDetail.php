<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingDetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function service_location_fee()
    {
        return $this->hasOne(SettingServiceLocationFee::class, 'setting_details_id');
    }

    public function service_category()
    {
        return $this->hasMany(SettingServiceCategory::class, 'setting_details_id');
    }

}
