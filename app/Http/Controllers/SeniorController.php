<?php

namespace App\Http\Controllers;

use App\Models\Senior;
use Illuminate\Http\Request;

class SeniorController extends Controller
{
    public function index()
    {
        //fetch data
        $seniors = Senior::all();

        // group by position
        $playersByPosition = $seniors->groupBy('position');


        // pass view/return view
        return view('senior.seniors', compact('playersByPosition'));
    }
}
