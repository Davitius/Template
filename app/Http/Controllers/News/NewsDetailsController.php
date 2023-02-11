<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsDetailsController extends Controller
{
    public function index()
    {
        return view('News.news_details');
    }
}
