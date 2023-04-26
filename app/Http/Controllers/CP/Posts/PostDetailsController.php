<?php

namespace App\Http\Controllers\CP\Posts;

use App\Http\Controllers\Controller;
use App\Models\Constructor;
use App\Models\palette;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PostDetailsController extends Controller
{
    public function index($language, $type, $id)
    {
        App::setlocale($language);

        //        პალიტრა
        $array = $this->palette();

        $post = Post::find($id);

        return view('CP.Posts.postdetails', compact('language', 'array', 'post', 'type'));
    }
}
