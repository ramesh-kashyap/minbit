<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('main.home');
    }

    public function about()
    {
        return view('main.about');
    }

    public function services()
    {
        return view('main.services');
    }

    public function contact()
    {
        return view('main.contact');
    }
    public function faq()
    {
        return view('main.faq');
    }
   
    public function tutorial()
    {
        return view('main.tutorial');
    }

    public function team()
    {
        return view('main.team');
    }
    public function careers()
    {
        return view('main.careers');
    }

    public function plan()
    {
        return view('main.plan');
    }
    public function market()
    {
        return view('main.market');
    }


}