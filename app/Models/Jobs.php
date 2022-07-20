<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function getRouteKeyName()
    {
        return 'id_unique';
    }
    public function match_talent()
    {
        return $this->hasMany(JobsMatchTalent::class, 'jobs_id');
    }

    public function languages()
    {
        return $this->hasMany(JobsLanguages::class, 'jobs_id');
    } 
    
    public function availability()
    {
        return $this->hasMany(JobsAvailabiltyDays::class, 'jobs_id');
    }   
}
