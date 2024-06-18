<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademyPlayer;

class AcademyPlayerController extends Controller
{
    public function index()
    {
        $academyplayer = AcademyPlayer::all();
        return view('academyplayer.academyplayers', compact('academyplayer'));
    }
}
