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
        return view('admin.frontSetting.index', compact('homefrontSetting'));
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
