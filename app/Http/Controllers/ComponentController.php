<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function about_us()
    {
        return view('components.about_us');
    }

    public function contact_us()
    {
        return view('components.contact_us');
    }

    public function privacy_policy()
    {
        return view('components.privacy_policy');
    }

    public function terms_of_use()
    {
        return view('components.terms_of_use');
    }

    public function donate()
    {
        return view('components.donate');
    }
}
