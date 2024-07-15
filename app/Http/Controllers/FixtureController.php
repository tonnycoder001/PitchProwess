<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    public function men()
    {
        return view('fixtures.men');
    }

    public function women()
    {
        return view('fixtures.women');
    }

    public function academy()
    {
        return view('fixtures.academy');
    }

    public function league(Request $request)
    {
        $team = $request->input('team', 'men');
        $fixtures = Fixture::where('type', 'league')->where('team', $team)->get();
        return view('fixtures.men_league', compact('fixtures', 'team'));
    }

    public function tournament(Request $request)
    {
        $team = $request->input('team', 'men');
        $fixtures = Fixture::where('type', 'tournament')->where('team', $team)->get();
        return view('fixtures.men_tournament', compact('fixtures', 'team'));
    }

    public function friendly(Request $request)
    {
        $team = $request->input('team', 'men');
        $fixtures = Fixture::where('type', 'friendly')->where('team', $team)->get();
        return view('fixtures.men_friendly', compact('fixtures', 'team'));
    }


    public function women_league(Request $request)
    {
        $team = $request->input('team', 'women');
        $fixtures = Fixture::where('type', 'league')->where('team', $team)->get();
        return view('fixtures.women_league', compact('fixtures', 'team'));
    }

    public function women_tournament(Request $request)
    {
        $team = $request->input('team', 'women');
        $fixtures = Fixture::where('type', 'tournament')->where('team', $team)->get();
        return view('fixtures.women_tournament', compact('fixtures', 'team'));
    }

    public function women_friendly(Request $request)
    {
        $team = $request->input('team', 'women');
        $fixtures = Fixture::where('type', 'friendly')->where('team', $team)->get();
        return view('fixtures.women_friendly', compact('fixtures', 'team'));
    }


    public function academy_league(Request $request)
    {
        $team = $request->input('team', 'academy');
        $fixtures = Fixture::where('type', 'league')->where('team', $team)->get();
        return view('fixtures.academy_league', compact('fixtures', 'team'));
    }

    public function academy_tournament(Request $request)
    {
        $team = $request->input('team', 'academy');
        $fixtures = Fixture::where('type', 'tournament')->where('team', $team)->get();
        return view('fixtures.academy_tournament', compact('fixtures', 'team'));
    }

    public function academy_friendly(Request $request)
    {
        $team = $request->input('team', 'academy');
        $fixtures = Fixture::where('type', 'friendly')->where('team', $team)->get();
        return view('fixtures.academy_friendly', compact('fixtures', 'team'));
    }
}
