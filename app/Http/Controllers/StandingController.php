<?php

namespace App\Http\Controllers;

use App\Models\Standing;
use Illuminate\Http\Request;

class StandingController extends Controller
{
    public function index()
    {
        $standings = Standing::orderBy('points', 'desc')->orderBy('position', 'asc')->get();
        return view('standings', compact('standings'));
    }
}
