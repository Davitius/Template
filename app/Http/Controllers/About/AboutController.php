<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\Constructor;
use App\Models\palette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class AboutController extends Controller
{
    public function index($language)
    {
        App::setlocale($language);

        //        პალიტრა
        $array = $this->palette();
        $Ebout = DB::table('posts')->where('type', 'About')->get();


        return view('About.about', compact('language', 'array', 'Ebout'));
    }
}
