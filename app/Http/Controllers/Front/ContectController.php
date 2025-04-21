<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Http\Request;

class ContectController extends FrontController
{
    public function contect()
    {
        return view('front.contect');
    }
}
