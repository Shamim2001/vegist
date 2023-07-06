<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

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

        $products = Product::latest()->paginate();
        // Return
        return view('frontend.shop.index', compact('products'));
    }

    public function singleProduct($slug) {
        $product = Product::where('slug', $slug)->first();
        // Return
        return view('frontend.shop.single', compact('product'));
    }
}
