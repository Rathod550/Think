<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\FrontSetting;

class FrontSettingController extends AdminController
{
    public function index(Request $request)
    {
        $homeFrontSettings = FrontSetting::where('page_name', 'Home')->get();
        $homefrontSetting = [];
        foreach($homeFrontSettings as $key => $value){
            $homefrontSetting[$value->slug] = $value;
        }
        return view('admin.frontSetting.index', compact('homefrontSetting'));
    }
}
