<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    function index() {
        // Recent News
        $recentNews = News::paginate(10);

        // Return
        return view('backend.news.index', compact('recentNews'));
    }
}
