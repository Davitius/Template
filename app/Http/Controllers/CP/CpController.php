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
        $array = $this->palette();

        return view('CP.panel', compact('language', 'array'));
    }
}
