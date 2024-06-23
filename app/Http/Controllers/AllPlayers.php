<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use App\Enums\PlayerCategory;

class AllPlayers extends Controller
{

    public function men(Request $request)
    {
        $players = Player::all();
        $players = Player::where('category', PlayerCategory::MEN)->get();




        return view('senior.seniors', compact('players'));
    }

    public function women(Request $request)
    {
        $players = Player::all();
        $players = Player::where('category', PlayerCategory::WOMEN)->get();




        return view('women.women', compact('players'));
    }

    public function academy(Request $request)
    {
        $players = Player::all();
        $players = Player::where('category', PlayerCategory::ACADEMY)->get();




        return view('academyplayer.academyplayers', compact('players'));
    }
}
