<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Multitenancy\Models\Tenant;

class AuthenticateController extends Controller
{
    public function login()
    {
        return User::with('tenants')->get();
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

            return redirect()->intended('https://'.auth()->user()->tenants->domain);
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function register()
    {
        return Tenant::with('user')->get();
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

        $tenant = Tenant::create([
            'name' => $request->email,
            'domain' => $request->sub_domain.'.'.env('DOMAIN'),
            'database' => $request->sub_domain
        ]);

        $user = $tenant->user()->create([
            'email' =>  $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('https://'.$request->sub_domain.'.'.env('DOMAIN'));
       
    }
}
