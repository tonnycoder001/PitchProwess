<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademyPlayer;

class AcademyPlayerController extends Controller
{

    // Controller logic to fetch players
    public function index()
    {
        $academyplayer = AcademyPlayer::all();

        // Group players by position
        $playersByPosition = $academyplayer->groupBy('position');

        return view('academyplayer.academyplayers', compact('playersByPosition'));
    }
}
