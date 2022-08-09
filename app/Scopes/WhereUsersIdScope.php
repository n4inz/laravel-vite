<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class WhereUsersIdScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {


        // $builder->orderBy('id','desc');

        // $builder->where('users_id' , auth()->user()->staf->users_agency_id ?? auth()->user()->id);
    }
}