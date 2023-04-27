<?php

namespace App\Http\Controllers\CP\Posts;

use App\Http\Controllers\Controller;
use App\Models\Constructor;
use App\Models\palette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class NewPostController extends Controller
{
    public function index(Request $request, $language)
    {
        App::setlocale($language);

        //        პალიტრა
        $array = $this->palette();

        $type = $request->input('radio');

        return view('CP.Posts.newpost', compact('language', 'array', 'type'));
    }
}
