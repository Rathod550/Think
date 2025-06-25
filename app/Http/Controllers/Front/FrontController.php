<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class FrontController extends Controller
{
    public function __construct(){

        $blogCategorys = BlogCategory::where('status', 1)->get();

        view()->share('blogCategory', $blogCategorys);
        view()->share('frontTheme','frontTheme.default');
    }
}
