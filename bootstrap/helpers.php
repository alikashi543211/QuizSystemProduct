<?php

use App\Models\Category;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\Faq;

function uploadFile($file, $path, $name) 
{
    $filename = time().'-'.Str::random(4).'-'.$name.'.'.$file->getClientOriginalExtension();
    $file->move($path, $filename);
    return $path.'/'.$filename;
}


function getSlug($value)
{
    return Str::slug($value).Str::random(3);
}

function isAuth()
{
    return Auth::check();
}

function authUser()
{
    return auth()->user();
}

function getCategories($val = null)
{
    if(!is_null($val) && $val == 'featured')
    {
        return Category::where('is_featured', true)->get();
    }
    if(!is_null($val) && $val == 'active')
    {
        return Category::where('status', true)->get();
    }
    return Category::all();
}

function setting($key) {
    $setting = Setting::pluck('value', 'name');
    return $setting[$key] ?? '';
}

function testimonial_list()
{
    $list = Testimonial::all();
    return $list;
}

function activeFaqs()
{
    return Faq::where("status", true)->get();
}

function propertyDropdown()
{
    $value = ["Residential", "Commercial", "Plot", "Apartment"];
    return $value;
}

function hoursDropdown()
{
    $value = [1, 2, 3, 4, 5, 6, 7, 8];
    return $value;
}