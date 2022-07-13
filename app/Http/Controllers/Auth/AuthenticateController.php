<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Multitenancy\Models\Tenant;

class AuthenticateController extends Controller
{
    public function login()
    {
        return view('authenticate.login');
    }

    public function login_store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function register()
    {
        return view('authenticate.register');
    }

    public function register_store(Request $request)
    {

       

        $request->validate([
            'sub_domain' => 'required',
            'email' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);

       $id = Tenant::create([
            'name' => $request->email,
            'domain' => $request->sub_domain.'.'.env('DOMAIN'),
            'database' => env('DB_DATABASE')
        ]);

       $user = User::create([
            'email' =>  $request->email,
            'password' => Hash::make($request->password),
            // 'tenants_id' => 1
        ]);


        Auth::login($user);

        return redirect('https://'.$request->sub_domain.'.'.env('DOMAIN'));
       
    }
}
