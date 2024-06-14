<?php

namespace App\Http\Controllers;

use App\Models\Senior;
use Illuminate\Http\Request;

class SeniorController extends Controller
{
    public function index()
    {
        $seniors = Senior::all();
        return view('senior.seniors', compact('seniors'));
    }
}
