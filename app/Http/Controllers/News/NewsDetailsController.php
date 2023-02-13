<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

class NewsDetailsController extends Controller
{
    public function index($language, $id)
    {
//        dd($language);
        App::setlocale($language);



        return view('News.news_details', compact('language'));
    }
}
