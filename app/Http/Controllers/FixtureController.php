<?php

namespace App\Http\Controllers;

use App\Models\Fixture;
use Illuminate\Http\Request;

class FixtureController extends Controller
{
    public function index()
    {
        $fixtures = Fixture::all();
        return view('fixture.fixtures', compact('fixtures'));
    }
}
