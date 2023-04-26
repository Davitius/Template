<?php

namespace App\Http\Controllers\CP\Constructor;

use App\Http\Controllers\Controller;
use App\Models\Constructor;
use App\Models\palette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class ConstructorController extends Controller
{
    public function index($language)
    {
        $this->authorize('view', auth()->user());

        App::setlocale($language);

        //        პალიტრა
        $B = palette::find(1);
        $M = palette::find(2);
        $B1 = palette::find(3);
        $B2 = palette::find(4);
        $B3 = palette::find(5);
        $B4 = palette::find(6);
        $B5 = palette::find(7);
        $U = palette::find(8);
        $background = ['color' => $B->color];
        $menu = ['background' => $M->backcolor, 'color' => $M->color, 'hovercolor' => $M->hovercolor];
        $block1 = ['background' => $B1->backcolor, 'color' => $B1->color, 'size' => $B1->size, 'position' => $B1->position, 'visible' => $B1->visible];
        $block2 = ['background' => $B2->backcolor, 'color' => $B2->color, 'size' => $B2->size, 'position' => $B2->position, 'visible' => $B2->visible];
        $block3 = ['background' => $B3->backcolor, 'color' => $B3->color, 'size' => $B3->size, 'position' => $B3->position, 'visible' => $B3->visible];
        $block4 = ['background' => $B4->backcolor, 'color' => $B4->color, 'size' => $B4->size, 'position' => $B4->position, 'visible' => $B4->visible];
        $block5 = ['background' => $B5->backcolor, 'color' => $B5->color, 'size' => $B5->size, 'position' => $B5->position, 'visible' => $B5->visible];
        $usefullinks = ['background' => $U->backcolor, 'color' => $U->color, 'size' => $U->size];


        $header = Constructor::find(1);

        $sliders = DB::table('constructors')->where('id', '>', '1')->where('id', '<', '5')->get();
        $footerWords = DB::table('constructors')->where('id', '>', '4')->where('id', '<', '11')->get();
        $socialIcons = DB::table('constructors')->where('id', '>', '10')->where('id', '<', '15')->get();
        $ULImages = DB::table('constructors')->where('id', '>', '20')->orderBy('type')->paginate(5);





        return view('CP.constructor', compact('language', 'background', 'menu', 'block1', 'block2',
            'block3', 'block4', 'block5', 'usefullinks', 'header', 'sliders', 'footerWords', 'socialIcons', 'ULImages'));
    }
}
