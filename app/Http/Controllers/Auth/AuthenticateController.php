<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\TenancyRequest;
use App\Http\Traits\Credentials;
use App\Models\Credensial;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Multitenancy\Models\Tenant;


class AuthenticateController extends Controller
{
    use Credentials;
    public function login()
    {
        return view('authenticate.login');
    }

    public function tenancy(TenancyRequest $request)
    {
        $domain = User::with('tenants')->where('email' , request()->email)->first();
        if(empty($domain)){
            return redirect()->back()->with('messages', 'Credensial not found');
        }
        $this->create_credentials();
        return redirect()->to(env('URI').$domain->tenants->domain.'/tenancy');
    }

    public function login_store(Request $request)
    {

      
        $login = Credensial::first();


        $auth = [
            'email' => $login->email,
            'password' => $login->credensial
        ];

        if (Auth::attempt($auth)) {
            $request->session()->regenerate();
            $login->truncate();
            return response()->json([
                'status' => 200,
                'domain' => auth()->user()->tenants->domain
            ]);
        }
        $login->truncate();
        return response()->json([
            'status' => 401,
        ]);  

    }


    public function register()
    {
        return view('authenticate.register');
    }

    public function register_store(Request $request)
    {
       
        $request->validate([
            'sub_domain' => 'required|unique:tenants,domain',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);

        if(empty($this->cek_tenants())){

            $tenant = Tenant::create([
                'name' => $request->email,
                'domain' => $request->sub_domain.'.'.env('DOMAIN'),
                'database' => $request->sub_domain
            ]);
    
            $user = $tenant->user()->create([
                'email' =>  $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            $this->create_credentials();
            return redirect(env('URI').$request->sub_domain.'.'.env('DOMAIN').'/tenancy');
        }

        return redirect()->back()->withErrors('Error', 'Domain is exists');
       
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect(env('URI').env('DOMAIN'));
    }
}
