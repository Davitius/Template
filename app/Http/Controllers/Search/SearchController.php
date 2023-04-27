<?php

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Constructor;
use App\Models\palette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request, $language) {

        App::setlocale($language);

        //        პალიტრა
        $array = $this->palette();
        $title = 'title_' . $language;
        $Search = $request->input('search');
        $news = DB::table('posts')->where($title, 'LIKE', "%{$Search}%")->where('type', 'News')->paginate(5);

        return view('Search.search', compact('language', 'array', 'news', 'Search'));
    }
}
