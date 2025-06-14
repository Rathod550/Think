<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\FrontSetting;

class FrontSettingController extends AdminController
{
    public function index()
    {
        $homeFrontSettings = FrontSetting::where('page_name', 'Home')->get();
        $homefrontSetting = [];
        foreach($homeFrontSettings as $key => $value){
            $homefrontSetting[$value->slug] = $value;
        }

        $aboutUsFrontSettings = FrontSetting::where('page_name', 'AboutUs')->get();
        $aboutUsfrontSetting = [];
        foreach($aboutUsFrontSettings as $key => $value){
            $aboutUsfrontSetting[$value->slug] = $value;
        }

        $contactUsFrontSettings = FrontSetting::where('page_name', 'contactUs')->get();
        $contactUsfrontSetting = [];
        foreach($contactUsFrontSettings as $key => $value){
            $contactUsfrontSetting[$value->slug] = $value;
        }
        return view('admin.frontSetting.index', compact('homefrontSetting', 'aboutUsfrontSetting', 'contactUsfrontSetting'));
    }

    public function update(Request $request)
    {
        foreach($request->homeFrontSetting as $key => $value){
            $frontSetting = FrontSetting::where('slug', $key)->first();
            $frontSetting->update([
                'value_english' => getLanguage($value, 'en'),
                'value_hindi' => getLanguage($value, 'hi'),
                'value_gujrati' => getLanguage($value, 'gu'),
            ]);
        }

        notificationMsg('info','Front Setting Updated Successfully');
        return redirect()->route('admin.front.setting');
    }
}
