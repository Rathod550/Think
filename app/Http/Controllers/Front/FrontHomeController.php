<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use Illuminate\Http\Request;

class FrontHomeController extends FrontController
{
    public function index()
    {
        return view('front.index');
    }

    public function aboutUs()
    {
        return view('front.aboutUs');
    }

    public function contactUs()
    {
        return view('front.contactUs');
    }
}
