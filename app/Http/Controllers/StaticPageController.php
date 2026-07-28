<?php

namespace App\Http\Controllers;

class StaticPageController extends Controller
{
    /**
     * Show the Home View
     */
    public function home()
    {
        return $this->index();
    }

    /**
     * Show the Home View
     */
    public function index()
    {
        return view('static.home');
    }

    public function about()
    {
        //        return view('static.about');
    }

    public function contact()
    {
        //        return view('static.contact');
    }

    public function privacy()
    {
        //        return view('static.privacy');
    }
}
