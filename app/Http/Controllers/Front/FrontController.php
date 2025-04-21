<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
	public function __construct(){
        view()->share('frontTheme','frontTheme.default');
    }    
}
