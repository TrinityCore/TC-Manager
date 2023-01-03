<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public static function home()
    {
        return view('pages.home');
    }
}
