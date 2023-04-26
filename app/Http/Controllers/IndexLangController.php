<?php

namespace App\Http\Controllers;

use App\Models\Constructor;
use App\Models\palette;
//use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Route;
//use function League\Flysystem\get;

class IndexLangController extends Controller
{
    public function index($language)
    {
        App::setlocale($language);
        if($language == '') {$language = 'GE';}

//        პალიტრა
        $B = palette::find(1);
        $M = palette::find(2);
        $B1 = palette::find(3);
        $B2 = palette::find(4);
        $B3 = palette::find(5);
        $B4 = palette::find(6);
        $B5 = palette::find(7);
        $B6 = palette::find(8);
        $U = palette::find(9);
        $U2 = palette::find(10);

        $background = ['color' => $B->color];
        $menu = ['background' => $M->backcolor, 'color' => $M->color, 'hovercolor' => $M->hovercolor];
        $block1 = ['background' => $B1->backcolor, 'color' => $B1->color, 'size' => $B1->size, 'position' => $B1->position, 'visible' => $B1->visible];
        $block2 = ['background' => $B2->backcolor, 'color' => $B2->color, 'size' => $B2->size,  'position' => $B2->position,'visible' => $B2->visible];
        $block3 = ['background' => $B3->backcolor, 'color' => $B3->color, 'size' => $B3->size,  'position' => $B3->position,'visible' => $B3->visible];
        $block4 = ['background' => $B4->backcolor, 'color' => $B4->color, 'size' => $B4->size,  'position' => $B4->position,'visible' => $B4->visible];
        $block5 = ['background' => $B5->backcolor, 'color' => $B5->color, 'size' => $B5->size,  'position' => $B5->position,'visible' => $B5->visible];
        $block6 = ['background' => $B6->backcolor, 'color' => $B6->color, 'size' => $B6->size, 'position' => $B6->position, 'visible' => $B6->visible];
        $usefullinks = ['background' => $U->backcolor, 'color' => $U->color, 'size' => $U->size, 'visible' => $U->visible,
            'title_GE' => $U->title_GE, 'title_EN' => $U->title_EN, 'title_RU' => $U->title_RU];
        $usefullinks2 = ['background' => $U2->backcolor, 'color' => $U2->color, 'size' => $U2->size, 'visible' => $U2->visible,
            'title_GE' => $U2->title_GE, 'title_EN' => $U2->title_EN, 'title_RU' => $U2->title_RU];
        $header = Constructor::find(1);
        $slider1 = Constructor::find(2);
        $slider2 = Constructor::find(3);
        $slider3 = Constructor::find(4);
        $sliders = [$slider1->image, $slider2->image, $slider3->image];
        $footerWords = DB::table('constructors')->where('id', '>', '4')->where('id', '<', '11')->get();
        $socialIcons = DB::table('constructors')->where('id', '>', '10')->where('id', '<', '15')->get();
        $ULImages = DB::table('constructors')->where('id', '>', '20')->where('type', 1)->get();
        $ULImages2 = DB::table('constructors')->where('id', '>', '20')->where('type', 2)->get();

        $Block = 'Block';
        $Blocks = DB::table('posts')->where('type', 'LIKE', "%{$Block}%")->get();



        return view('index', compact('language', 'background', 'menu', 'block1', 'block2',
            'block3', 'block4', 'block5', 'block6', 'usefullinks', 'usefullinks2', 'header', 'sliders', 'footerWords',
            'socialIcons', 'ULImages', 'ULImages2', 'Blocks'));
    }
}
