<?php

namespace App\Http\Traits;

use App\Models\Credensial;
use Spatie\Multitenancy\Models\Tenant;

trait Credentials
{
    public function create_credentials()
    {
        $credensial = Credensial::where('email', request()->email)->first();
        if(!$credensial){
            Credensial::create([
                'email' => request()->email,
                'credensial' => request()->password
            ]);
        }
        
        return false;
            
    }

    public function cek_tenants()
    {
       return Tenant::where('domain', request()->sub_domain.'.'.env('DOMAIN'))->first();
    }
}