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
        $array = $this->palette();


        return view('index', compact('language', 'array'));
    }
}
