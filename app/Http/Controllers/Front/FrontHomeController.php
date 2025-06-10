<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use Illuminate\Http\Request;
use App;
use App\Models\FrontSetting;
use App\Models\BlogCategory;
use App\Models\Slider;
use App\Models\OurTeam;
use App\Models\ClientSays;
use App\Models\AboutUsSlider;

class FrontHomeController extends FrontController
{
    public function index(Request $request)
    {
        $sliders = Slider::get();
        $ourTeams = OurTeam::get();
        $clientSays = ClientSays::get();
        $blogCategorys = BlogCategory::whereNull('parent_id')->where('status', 1)->get();
        $frontSettings = FrontSetting::where('page_name', 'Home')->get();
        $frontSetting = [];
        foreach($frontSettings as $key => $value){
            $frontSetting[$value->slug] = $value;
        }
        return view('front.index', compact('frontSetting', 'blogCategorys', 'sliders', 'ourTeams', 'clientSays'));
    }

    public function aboutUs()
    {
        $frontSettings = FrontSetting::where('page_name', 'AboutUs')->get();
        $frontSetting = [];
        foreach($frontSettings as $key => $value){
            $frontSetting[$value->slug] = $value;
        }
        $ourTeams = OurTeam::get();
        $clientSays = ClientSays::get();
        $sliders = AboutUsSlider::get();
        return view('front.aboutUs', compact('frontSetting', 'ourTeams', 'clientSays', 'sliders'));
    }

    public function contactUs()
    {
        $frontSettings = FrontSetting::where('page_name', 'ContactUs')->get();
        $frontSetting = [];
        foreach($frontSettings as $key => $value){
            $frontSetting[$value->slug] = $value;
        }
        return view('front.contactUs', compact('frontSetting'));
    }
}
