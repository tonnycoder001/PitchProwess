<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use App\Enums\PlayerCategory;

class AllPlayers extends Controller
{
    public function men(Request $request)
    {
        $query = $request->input('query');

        $goalkeepers = Player::where('category', PlayerCategory::MEN)
            ->where('position', 'Goalkeeper')
            ->when($query, function ($q) use ($query) {
                $q->where('first_name', 'like', "%{$query}%");
            })
            ->get();

        $defenders = Player::where('category', PlayerCategory::MEN)
            ->where('position', 'Defender')
            ->when($query, function ($q) use ($query) {
                $q->where('first_name', 'like', "%{$query}%");
            })
            ->get();

        $midfielders = Player::where('category', PlayerCategory::MEN)
            ->where('position', 'Midfielder')
            ->when($query, function ($q) use ($query) {
                $q->where('first_name', 'like', "%{$query}%");
            })
            ->get();

        $forwards = Player::where('category', PlayerCategory::MEN)
            ->where('position', 'Forward')
            ->when($query, function ($q) use ($query) {
                $q->where('first_name', 'like', "%{$query}%");
            })
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


    // Similarly, update the women and academy methods

    public function search(Request $request)
    {
        $query = $request->input('query');

        $players = Player::when($query, function ($q) use ($query) {
            $q->where('first_name', 'like', "%{$query}%");
        })
            ->get();

        return view('search.search-results', compact('players'));
    }
}
