<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.index');
    }
    public function check(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->route('dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials');
        }
    }
    public function logout()
    {
        Auth::logout();

        return redirect()->route('home'); 
    }
}
