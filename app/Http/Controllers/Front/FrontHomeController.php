<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Http\Request;

class FrontHomeController extends FrontController
{
    public function index()
    {
        return view('front.index');
    }
}
