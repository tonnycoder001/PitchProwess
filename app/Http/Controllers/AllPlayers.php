<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use App\Enums\PlayerCategory;

class AllPlayers extends Controller
{

    // public function men(Request $request)
    // {
    //     $players = Player::all();
    //     $players = Player::where('category', PlayerCategory::MEN)->get();




    //     return view('senior.seniors', compact('players'));
    // }

    // public function women(Request $request)
    // {
    //     $players = Player::all();
    //     $players = Player::where('category', PlayerCategory::WOMEN)->get();




    //     return view('women.women', compact('players'));
    // }

    // public function academy(Request $request)
    // {
    //     $players = Player::all();
    //     $players = Player::where('category', PlayerCategory::ACADEMY)->get();




    //     return view('academyplayer.academyplayers', compact('players'));
    // }


    public function men(Request $request)
    {
        $goalkeepers = Player::where('category', PlayerCategory::MEN)
            ->where('position', 'Goalkeeper')
            ->get();
        $defenders = Player::where('category', PlayerCategory::MEN)
            ->where('position', 'Defender')
            ->get();
        $midfielders = Player::where('category', PlayerCategory::MEN)
            ->where('position', 'Midfielder')
            ->get();
        $forwards = Player::where('category', PlayerCategory::MEN)
            ->where('position', 'Forward')
            ->get();

        return view('senior.seniors', compact('goalkeepers', 'defenders', 'midfielders', 'forwards'));
    }

    public function women(Request $request)
    {
        $goalkeepers = Player::where('category', PlayerCategory::WOMEN)
            ->where('position', 'Goalkeeper')
            ->get();
        $defenders = Player::where('category', PlayerCategory::WOMEN)
            ->where('position', 'Defender')
            ->get();
        $midfielders = Player::where('category', PlayerCategory::WOMEN)
            ->where('position', 'Midfielder')
            ->get();
        $forwards = Player::where('category', PlayerCategory::WOMEN)
            ->where('position', 'Forward')
            ->get();

        return view('women.women', compact('goalkeepers', 'defenders', 'midfielders', 'forwards'));
    }

    public function academy(Request $request)
    {
        $goalkeepers = Player::where('category', PlayerCategory::ACADEMY)
            ->where('position', 'Goalkeeper')
            ->get();
        $defenders = Player::where('category', PlayerCategory::ACADEMY)
            ->where('position', 'Defender')
            ->get();
        $midfielders = Player::where('category', PlayerCategory::ACADEMY)
            ->where('position', 'Midfielder')
            ->get();
        $forwards = Player::where('category', PlayerCategory::ACADEMY)
            ->where('position', 'Forward')
            ->get();

        return view('academyplayer.academyplayers', compact('goalkeepers', 'defenders', 'midfielders', 'forwards'));
    }
}
