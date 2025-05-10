<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use Illuminate\Http\Request;
use App;
use App\Models\FrontSetting;

class FrontHomeController extends FrontController
{
    public function index(Request $request)
    {
        $frontSettings = FrontSetting::where('page_name', 'Home')->get();
        $frontSetting = [];
        foreach($frontSettings as $key => $value){
            $frontSetting[$value->slug] = $value;
        }
        return view('front.index', compact('frontSetting'));
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
