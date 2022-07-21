<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobModelsMatchTalent extends Model
{
    use HasFactory;
    protected  $guarded = ['id'];
    public function jobs()
    {
        return $this->belongsTo(JobModels::class, 'job_models_id');
    }
}
