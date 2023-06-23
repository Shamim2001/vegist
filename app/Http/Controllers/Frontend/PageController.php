<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    // Index
    public function index(  )
    {
        $sliders = Slider::latest()->get();
        $categories = Category::latest()->get();
        // Return
        return view('frontend.home.index', compact('sliders', 'categories'));
    }


    public function shop() {
        // Return
        return view('frontend.shop.index');
    }
}
