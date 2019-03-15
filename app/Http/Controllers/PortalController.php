<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function splash()
    {
        return view('splash');
    }

    public function about()
    {
        return view('about');
    }

    public function news()
    {
        return view('article');
    }

    public function showroom()
    {
        return view('showroom');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }
}
