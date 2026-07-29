<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class StaticPageController extends Controller
{
    /**
     * Show the Home view
     */
    public function home(): View|Factory
    {
        return $this->index();
    }

    /**
     * Show the Home view
     */
    public function index(): Factory|View
    {
        return view('static.home');
    }

    /**
     * Show the About view
     */
    public function about(): Factory|View
    {
        return view('static.about');
    }

    /**
     * Show the Contact Us view
     */
    public function contactUs(): Factory|View
    {
        return view('static.contact-us');
    }

    /**
     * Show the Privacy policy view
     */
    public function privacy(): Factory|View
    {
        return view('static.privacy');
    }
}
