<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Constructor;
use App\Models\palette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


class NewsController extends Controller
{
    public function index($language)
    {
        App::setlocale($language);

//        პალიტრა
        $array = $this->palette();
        $news = DB::table('posts')->where('type', 'News')->paginate(10);

        return view('News.news', compact('language',  'array', 'news'));
    }
}
