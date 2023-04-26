<?php

namespace App\Http\Controllers\CP\Contact;

use App\Http\Controllers\Controller;
use App\Models\Constructor;
use App\Models\Contact;
use App\Models\palette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
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


        $address = Contact::find(1);
        $location = Contact::find(2);




        return view('CP.contact', compact('language', 'background', 'menu', 'header', 'footerWords', 'socialIcons', 'address', 'location'));
    }
}
