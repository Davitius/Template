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
        $B = palette::find(1);
        $M = palette::find(2);
        $background = ['color' => $B->color];
        $menu = ['background' => $M->backcolor, 'color' => $M->color, 'hovercolor' => $M->hovercolor];
        $header = Constructor::find(1);
        $footerWords = DB::table('constructors')->where('id', '>', '4')->
        where('id', '<', '11')->get();
        $socialIcons = DB::table('constructors')->where('id', '>', '10')->
        where('id', '<', '15')->get();

//        $topics = DB::table('topics')->where('active', 'on')->get();
//        $posts = DB::table('posts')->where('active', 'on')->
//        orderBy('created_at', 'DESC')->get();


        $type = $request->input('radio');
//        dd($type);



        return view('CP.Posts.newpost', compact('language', 'background', 'menu', 'header', 'footerWords', 'socialIcons', 'type'));
    }
}
