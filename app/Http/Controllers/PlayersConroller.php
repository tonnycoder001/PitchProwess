<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersConroller extends Controller
{
    public function index()
    {
        return view('players.players');
    }
}
