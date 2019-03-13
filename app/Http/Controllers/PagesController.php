<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }   

    public function pageDetails()
    {
        return view('frontend.pages.details');
    }
}
