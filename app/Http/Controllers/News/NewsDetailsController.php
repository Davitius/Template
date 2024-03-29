<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Constructor;
use App\Models\palette;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class NewsDetailsController extends Controller
{
    public function index($language, $id)
    {
//        dd($language);
        App::setlocale($language);

        //        პალიტრა
        $array = $this->palette();
        $new = Post::find($id);

        return view('News.news_details', compact('language', 'array', 'new'));
    }
}
