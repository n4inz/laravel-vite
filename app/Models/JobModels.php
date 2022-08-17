<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid as Generator;
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

    public function talent_status()
    {
        return $this->hasMany(JobModelsTalentStatus::class,'job_models_id');
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

    public function comment()
    {
        return $this->hasMany(JobModelsComment::class, 'job_models_id');
    }

    public function actifities()
    {
        return $this->hasMany(Actifity::class , 'job_models_id');
    }

    public function chile()
    {
        return $this->hasMany(JobModelsChile::class, 'job_models_id');
    }

    public function setting_status()
    {
        return $this->belongsTo(SettingJobModelsStatus::class, 'set_job_status_id');
    }

    public function match_talents_add()
    {
        return $this->hasMany(JobModelsMatchTalentAdd::class, 'job_models_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            try {
                $model->uid = Generator::uuid4()->getHex()->toString();
                // $model->id_unique = Generator::uuid4()->getHex()->toString();

            } catch (\Exception $e) {
                abort(500, $e->getMessage());
            }
        });
    }
}
