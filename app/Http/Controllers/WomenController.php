<?php

namespace App\Http\Controllers;

use App\Models\Women;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    // Controller logic to fetch players
    public function index()
    {
        $women = Women::all();

        // Group players by position
        $playersByPosition = $women->groupBy('position');

        return view('women.women', compact('playersByPosition'));
    }
}
