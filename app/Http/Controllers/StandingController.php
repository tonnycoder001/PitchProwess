<?php

namespace App\Http\Controllers;

use App\Models\Standing;
use Illuminate\Http\Request;

class StandingController extends Controller
{
    public function index()
    {
        // Fetch all standings sorted by points and goal difference
        $standings = Standing::orderBy('points', 'desc')
            ->orderBy('goal_difference', 'desc')
            ->get();
        // Update the position of each team based on the ranking
        foreach ($standings as $index => $standing) {
            $standing->position = $index + 1; // Assign rank starting from 1
            $standing->save();
        }
        return view('standings', compact('standings'));
    }
}
