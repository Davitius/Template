<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function index()
    {
//        dd($language);

        $language = 'ge';

        return view('index', compact('language'));
    }
}
