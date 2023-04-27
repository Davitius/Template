<?php

namespace App\Http\Controllers\CP\Posts;

use App\Http\Controllers\Controller;
use App\Models\Constructor;
use App\Models\Contact;
use App\Models\palette;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index($language)
    {
        App::setlocale($language);

        //        პალიტრა
        $array = $this->palette();

        $topics = DB::table('topics')->where('active', 'on')->paginate(10);
        $posts = DB::table('posts')->orderBy('created_at', 'DESC')->paginate(10);
        $Type = '';


        return view('CP.Posts.post', compact('language', 'array', 'topics', 'posts', 'Type'));
    }

}
