<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index()
    {
        //fetch data
        $tournament = Tournament::all();



        // pass view/return view
        return view('tournaments.tournaments', compact('tournament'));
    }
}
