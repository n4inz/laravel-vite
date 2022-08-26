<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid as Generator;
class JobModelsPotentialClient extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

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
