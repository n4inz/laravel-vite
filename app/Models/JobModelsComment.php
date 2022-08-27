<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobModelsComment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    

    public function job_models()
    {
        return $this->belongsTo(JobModels::class, 'job_models_id');
    }

    public function job_models_comments_reply()
    {   
        return $this->hasMany(JobModelsCommentsReply::class, 'job_models_comments_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
