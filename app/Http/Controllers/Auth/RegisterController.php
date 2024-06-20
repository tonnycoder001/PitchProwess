<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\NewUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        $newusers = NewUsers::create($attributes);

        Auth::login($newusers);

        return redirect('/fixtures')->with('success', 'Account created successfully.');
    }
}