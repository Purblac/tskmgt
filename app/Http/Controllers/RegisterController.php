<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view('reg.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $email = $input['email'];
        
        // Check if user with the given email already exists
        if (User::where('email', $email)->exists()) {
            return view('reg.create', ['message' => 'Email already registered']);
        } else {
            User::create([
                'name' => $input['name'],
                'email' => $email,
                'password' => Hash::make($input['password'])
            ]);
            return view('reg.done');
        }
        
    }
}
