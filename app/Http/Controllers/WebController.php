<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function comic()
    {
        return view('pages.comic');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function donate()
    {
        return view('pages.donate');
    }
}
