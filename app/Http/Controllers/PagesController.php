<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }
     
    public function contact()
    {
        return view('contact');       
    }
}