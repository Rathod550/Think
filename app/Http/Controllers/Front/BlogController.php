<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Http\Request;

class BlogController extends FrontController
{
    public function blogs()
    {
        return view('front.blog');
    }

    public function blogPreview()
    {
        return view('front.blog-preview');
    }
}
