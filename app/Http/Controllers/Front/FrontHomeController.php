<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use Illuminate\Http\Request;
use App;
use App\Models\FrontSetting;
use App\Models\BlogCategory;
use App\Models\Blog;
use App\Models\Slider;
use App\Models\OurTeam;
use App\Models\ClientSays;
use App\Models\AboutUsSlider;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Validator;
use Jenssegers\Agent\Agent;

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

    public function termsAndConditions()
    {
        return view('front.termsAndConditions');
    }

    public function contactUsStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'mobile_number' => 'nullable|digits_between:7,15',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ],[
            'name.required' => 'Please enter your name.',
            'name.max' => 'Name cannot exceed 191 characters.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Email cannot exceed 191 characters.',
            'mobile_number.digits_between' => 'Please enter a valid mobile number between 7 to 15 digits.',
            'subject.required' => 'Please enter a subject.',
            'subject.max' => 'Subject cannot exceed 255 characters.',
            'message.required' => 'Please enter your message.',
            'message.max' => 'Message cannot exceed 1000 characters.',
        ]);

        $agent = new Agent();
        $input = $request->all();
        $input['ip_address'] = $request->ip();
        $input['device'] = ($agent->isMobile() ? 'Mobile' : 'Desktop') . ' | ' . $agent->platform() . ' | ' . $agent->browser();

        ContactUs::create($input);

        return redirect()->route('contactUs')->with('success', 'Your message has been sent successfully.');
    }

    public function categories($slug)
    {
        $blogCategory = BlogCategory::where('slug', $slug)->first();
        $blogSubCategorys = BlogCategory::where('parent_id', $blogCategory->id)->get();

        if(!empty($blogSubCategorys) && $blogSubCategorys->count() > 0){
            return view('front.categories', compact('blogSubCategorys', 'blogCategory'));
        }else{
            return redirect()->route('blogs', ['categories', $blogCategory->slug]);
        }
    }

    public function blogs($type = null, $slug = null)
    {
        if($type == 'categories'){
            $blogCategory = BlogCategory::where('slug', $slug)->first();
            $blogs = Blog::where('blog_category_id', $blogCategory->id)->get();
        }elseif($type == 'categories'){
            $blogCategory = BlogCategory::where('slug', $slug)->first();
            $blogs = Blog::where('blog_sub_category_id', $blogCategory->id)->get();
        }else{
            $blogs = Blog::get();
        }
        
        return view('front.blogs', compact('blogs'));
    }
}
