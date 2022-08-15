<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobModelsNewApplicant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function file()
    {
        return $this->hasOne(JobModelsNewAplicantsFile::class ,'new_applicants_id');
    }
}
