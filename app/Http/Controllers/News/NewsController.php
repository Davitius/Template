<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

class NewsController extends Controller
{
    public function index($language)
    {
        App::setlocale($language);



        return view('News.news', compact('language'));
    }
}
