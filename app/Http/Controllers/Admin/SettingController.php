<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function save(Request $req)
    {
        foreach ($req->except('_token') as $key => $value) {
            $setting = Setting::whereName($key)->first() ?? new Setting();
            if ($req->hasFile($key)) {
                $image_path =  uploadFile($value, 'uploads/cms', $key);
                $setting->name = $key;
                $setting->value = $image_path;
                $setting->save();
            } else{
                $setting->name = $key;
                $setting->value = $value;
                $setting->save();
            }
        }

        $msg = 'Saved Successfully';
        return redirect()->back()->with('success', $msg);
    }

    public function homePage()
    {
        return view('admin.cms.home_page', get_defined_vars());
    }

    public function terms()
    {
        return view('admin.cms.terms_page', get_defined_vars());
    }

    public function privacy()
    {
        return view('admin.cms.privacy_page', get_defined_vars());
    }

    public function contactPage()
    {
        return view('admin.cms.contact_page', get_defined_vars());
    }

    public function aboutPage()
    {
        return view('admin.cms.about_page', get_defined_vars());
    }

    public function general()
    {
        return view('admin.cms.general', get_defined_vars());
    }
}
