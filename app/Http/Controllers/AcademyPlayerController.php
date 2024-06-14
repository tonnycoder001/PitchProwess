<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademyPlayer;

class AcademyPlayerController extends Controller
{
    public function index()
    {
        $academyplayers = AcademyPlayer::all();
        return view('academyplayer.academyplayers', compact('academyplayers'));
    }
}
