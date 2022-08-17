<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingJobModelsStatus extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function job_models()
    {
        return $this->hasMany(JobModels::class,'set_job_status_id');
    }
}
