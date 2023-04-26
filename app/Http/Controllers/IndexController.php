<?php

namespace App\Http\Controllers;

use App\Models\Constructor;
use App\Models\palette;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public function index()
    {
        $language = 'ge';
        App::setlocale($language);
        if($language == '') {$language = 'GE';}

//        პალიტრა
        $array = $this->palette();

//        $background = $array[0];
//        $block1 = $array[1];
//        $block2 = $array[2];
//        $block3 = $array[3];
//        $block4 = $array[4];
//        $block5 = $array[5];
//        $block6 = $array[6];
//        $menu = $array[7];
//        $usefullinks = $array[8];
//        $usefullinks2 = $array[9];
//        $header = $array[10];
//        $sliders = $array[11];
//        $footerWords = $array[12];
//        $socialIcons = $array[13];
//        $ULImages = $array[14];
//        $ULImages2 = $array[15];
//        $Blocks = $array[16];


        return view('index', compact('language', 'array'));
    }
}
