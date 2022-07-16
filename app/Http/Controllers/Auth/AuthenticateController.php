<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Spatie\Multitenancy\Models\Tenant;

class AuthenticateController extends Controller
{
    public function login()
    {
        return view('authenticate.login');
    }

    public function login_store(Request $request)
    {

    
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        // return redirect()->intended('https://'.auth()->user()->tenants->domain.'/dashboard');
        $credentials = $request->only('email', 'password');


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            return redirect()->intended('https://'.auth()->user()->tenants->domain.'/dashboard')->with('email', $request->email,
            );
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function login_tenancy(Request $request)
    {
        return response()->json([
            'test' => 'testing'
        ]);
        // $request->validate([
        //     'email' => 'required',
        //     'password' => 'required'
        // ]);

        // $credentials = $request->only('email', 'password');

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();

        //     return redirect()->intended('http://'.auth()->user()->tenants->domain.'/login-tenancy');
        // }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
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

        // return auth()->user()->email;

        // return redirect('https://'.$request->sub_domain.'.'.env('DOMAIN').'/dashboard');
        return redirect('http://'.$request->sub_domain.'.'.env('DOMAIN').'/dashboard');
       
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('https://'.env('DOMAIN'));
    }
}
