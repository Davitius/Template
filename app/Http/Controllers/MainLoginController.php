<?php

namespace App\Http\Controllers;

use App\Models\Constructor;
use App\Models\palette;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class MainLoginController extends Controller
{
    public function index($language)
    {
        App::setlocale($language);

//        პალიტრა
        $array = $this->palette();


        return view('login', compact('language', 'array'));
    }
}
