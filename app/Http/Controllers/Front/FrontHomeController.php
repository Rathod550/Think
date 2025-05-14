<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use Illuminate\Http\Request;
use App;
use App\Models\FrontSetting;
use App\Models\BlogCategory;
use App\Models\Slider;
use App\Models\OurTeam;

class FrontHomeController extends FrontController
{
    public function index(Request $request)
    {
        $sliders = Slider::get();
        $ourTeams = OurTeam::get();
        $blogCategorys = BlogCategory::whereNull('parent_id')->where('status', 1)->get();
        $frontSettings = FrontSetting::where('page_name', 'Home')->get();
        $frontSetting = [];
        foreach($frontSettings as $key => $value){
            $frontSetting[$value->slug] = $value;
        }
        return view('front.index', compact('frontSetting', 'blogCategorys', 'sliders', 'ourTeams'));
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
