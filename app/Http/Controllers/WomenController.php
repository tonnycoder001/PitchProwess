<?php

namespace App\Http\Controllers;

use App\Models\Women;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    public function index()
    {
        $women = Women::all();
        return view('women.women', compact('women'));
    }
}
