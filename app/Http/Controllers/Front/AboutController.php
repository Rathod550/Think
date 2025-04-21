<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Http\Request;

class AboutController extends FrontController
{
    public function about()
    {
        return view('front.about');
    }
}
