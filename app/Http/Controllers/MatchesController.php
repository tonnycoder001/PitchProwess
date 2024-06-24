<?php

namespace App\Http\Controllers;

use App\Enums\MatchType;
use App\Models\Matches;
use Illuminate\Http\Request;

class MatchesController extends Controller
{
    public function league(Request $request)
    {
        $matches = Matches::all();
        $matches = Matches::where('type', MatchType::LEAGUE)->get();


        return view('league.league', compact('matches'));
    }

    public function tournament(Request $request)
    {
        $matches = Matches::all();
        $matches = Matches::where('type', MatchType::TOURNAMENT)->get();


        return view('tournaments.tournaments', compact('matches'));
    }

    public function friendly(Request $request)
    {
        $matches = Matches::all();
        $matches = Matches::where('type', MatchType::FRIENDLY)->get();



        return view('friendly.friendly', compact('matches'));
    }
}
