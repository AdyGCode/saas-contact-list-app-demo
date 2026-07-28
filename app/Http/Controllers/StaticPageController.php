<?php

namespace App\Http\Controllers;

class StaticPageController extends Controller
{
    /**
     * Show the Home view
     */
    public function home()
    {
        return $this->index();
    }

    /**
     * Show the Home view
     */
    public function index()
    {
        return view('static.home');
    }

    /**
     * Show the About view
     */
    public function about()
    {
        return view('static.about');
    }

    /**
     * Show the Contact Us view
     */
    public function contactUs()
    {
        return view('static.contact-us');
    }

    /**
     * Show the Privacy policy view
     */
    public function privacy()
    {
        return view('static.privacy');
    }
}
