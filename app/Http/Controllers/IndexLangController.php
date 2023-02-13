<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

class IndexLangController extends Controller
{
    public function index($language)
    {
        App::setlocale($language);

//        dd($language);

        if($language == '')
        {
            $language = 'GE';
        }

        return view('index', compact('language'));
    }
}
