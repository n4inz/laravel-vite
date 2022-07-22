<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobModels extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function getRouteKeyName()
    {
        return 'id_unique';
    }
    public function match_talent()
    {
        return $this->hasMany(JobModelsMatchTalent::class, 'job_models_id');
    }

    public function languages()
    {
        return $this->hasMany(JobModelsLanguages::class, 'job_models_id');
    } 
    
    public function availability()
    {
        return $this->hasMany(JobModelsAvailabiltyDays::class, 'job_models_id');
    }
    
    public function task()
    {
        return $this->hasMany(JobModelsTask::class,'job_models_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'clients_id');
    }
    public function file()
    {
        return $this->hasMany(JobModelsFile::class, 'job_models_id');
    }
}
