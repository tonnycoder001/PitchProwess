<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        Auth::attempt($attributes); // attempt to authenticate the user

        // request()->session()->regenerate(); // regenerate the session id
        if (Auth::check()) {
            return redirect('/');
        }

        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}
