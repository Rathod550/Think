<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use Illuminate\Http\Request;
use App;
use App\Models\FrontSetting;
use App\Models\BlogCategory;

class FrontHomeController extends FrontController
{
    public function index(Request $request)
    {
        $blogCategorys = BlogCategory::whereNull('parent_id')->where('status', 1)->get();
        $frontSettings = FrontSetting::where('page_name', 'Home')->get();
        $frontSetting = [];
        foreach($frontSettings as $key => $value){
            $frontSetting[$value->slug] = $value;
        }
        return view('front.index', compact('frontSetting', 'blogCategorys'));
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
