<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsMatchTalent extends Model
{
    use HasFactory;
    protected  $guarded = ['id'];
    public function jobs()
    {
        return $this->belongsTo(Jobs::class, 'jobs_id');
    }
}
