<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Category;
use App\Models\About;
use Illuminate\Http\Request;

class PageHomeController extends Controller
{
    public function anasayfa() {
        $slider = Slider::where('status','1')->first();
        $categories=Category::where('status','1')->get();
        $about=About::where('id','1')->first();

        return view('frontend.pages.index', compact('slider','categories','about'));
    }
}
