<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Http\Request;

class PortfolioController extends FrontController
{
    public function portfolio()
    {
        return view('front.portfolio');
    }
}
