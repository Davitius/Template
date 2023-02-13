<?php

namespace App\Http\Controllers\Ebout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

class EboutController extends Controller
{
    public function index($language)
    {
        App::setlocale($language);


        return view('Ebout.ebout', compact('language'));
    }
}
