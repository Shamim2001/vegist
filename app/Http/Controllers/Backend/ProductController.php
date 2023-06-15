<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index() {
        $products = Product::latest()->paginate(10);
        // Return
        return view('backend.product.index', compact('products'));
    }



    function create(Request $request) {
        $categories = Category::get();
        // Return
        return view('backend.product.create', compact('categories'));
    }
}
