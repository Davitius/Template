<?php

namespace App\Http\Controllers\CP;

use App\Http\Controllers\Controller;
use App\Models\Constructor;
use App\Models\palette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class CpController extends Controller
{
    public function index($language)
    {
        App::setlocale($language);

        //        პალიტრა
        $B = palette::find(1);
        $M = palette::find(2);

        $background = ['color' => $B->color];
        $menu = ['background' => $M->backcolor, 'color' => $M->color, 'hovercolor' => $M->hovercolor];

        $header = Constructor::find(1);

        $footerWords = DB::table('constructors')->where('id', '>', '4')->where('id', '<', '11')->get();
        $socialIcons = DB::table('constructors')->where('id', '>', '10')->where('id', '<', '15')->get();


        return view('CP.panel', compact('language', 'background', 'menu', 'header', 'footerWords', 'socialIcons'));
    }
}
